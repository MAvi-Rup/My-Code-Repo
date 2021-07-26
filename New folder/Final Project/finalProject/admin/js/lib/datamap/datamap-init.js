xt "Could not execute editor")"
		expand_todo_ids

		exit
		;;
	show-current-patch)
		exec git show REBASE_HEAD --
		;;
	*)
		return 1 # continue
		;;
	esac
}

setup_reflog_action () {
	comment_for_reflog start

	if test ! -z "$switch_to"
	then
		GIT_REFLOG_ACTION="$GIT_REFLOG_ACTION: checkout $switch_to"
		output git checkout "$switch_to" -- ||
			die "$(eval_gettext "Could not checkout \$switch_to")"

		comment_for_reflog start
	fi
}

init_basic_state () {
	orig_head=$(git rev-parse --verify HEAD) || die "$(gettext "No HEAD?")"
	mkdir -p "$state_dir" || die "$(eval_gettext "Could not create temporary \$state_dir")"
	rm -f "$(git rev-parse --git-path REBASE_HEAD)"

	: > "$state_dir"/interactive || die "$(gettext "Could not mark as interactive")"
	write_basic_state
}

init_revisions_and_shortrevisions () {
	shorthead=$(git rev-parse --short $orig_head)
	shortonto=$(git rev-parse --short $onto)
	if test -z "$rebase_root"
		# this is now equivalent to ! -z "$upstream"
	then
		shortupstream=$(git rev-parse --short $upstream)
		revisions=$upstream...$orig_head
		shortrevisions=$shortupstream..$shorthead
	else
		revisions=$onto...$orig_head
		shortrevisions=$shorthead
		test -z "$squash_onto" ||
		echo "$squash_onto" >"$state_dir"/squash-onto
	fi
}

complete_action() {
	test -s "$todo" || echo noop >> "$todo"
	test -z "$autosquash" || git rebase--interactive --rearrange-squash || exit
	test -n "$cmd" && git rebase--interactive --add-exec-commands --cmd "$cmd"

	todocount=$(git stripspace --strip-comments <"$todo" | wc -l)
	todocount=${todocount##* }

cat >>"$todo" <<EOF

$comment_char $(eval_ngettext \
	"Rebase \$shortrevisions onto \$shortonto (\$todocount command)" \
	"Rebase \$shortrevisions onto \$shortonto (\$todocount commands)" \
	"$todocount")
EOF
	append_todo_help
	gettext "
However, if you remove everything, the rebase will be aborted.

" | git stripspace --comment-lines >>"$to