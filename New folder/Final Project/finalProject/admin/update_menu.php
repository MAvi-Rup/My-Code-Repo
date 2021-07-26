>core.quotePath</code>
(see <a href="git-config.html">git-config(1)</a>). See also <code>--pathspec-file-nul</code> and
global <code>--literal-pathspecs</code>.</p>
</dd>
<dt class="hdlist1">--pathspec-file-nul</dt>
<dd>
<p>Only meaningful with <code>--pathspec-from-file</code>. Pathspec elements are
separated with NUL character and all other characters are taken
literally (including newlines and quotes).</p>
</dd>
<dt class="hdlist1">&lt;branch&gt;</dt>
<dd>
<p>Branch to checkout; if it refers to a branch (i.e., a name that,
when prepended with "refs/heads/", is a valid ref), then that
branch is checked out. Otherwise, if it refers to a valid
commit, your <code>HEAD</code> becomes "detached" and you are no longer on
any branch (see below for details).</p>
<div class="paragraph">
<p>You can use the <code>@{-N}</code> syntax to refer to the N-th last
branch/commit checked out using "git checkout" operation. You may
also specify <code>-</code> which is synonymous to <code>@{-1}</code>.</p>
</div>
<div class="paragraph">
<p>As a special case, you may use <code>A...B</code> as a shortcut for the
merge base of <code>A</code> and <code>B</code> if there is exactly one merge base. You can
leave out at most one of <code>A</code> and <code>B</code>, in which case it defaults to <code>HEAD</code>.</p>
</div>
</dd>
<dt class="hdlist1">&lt;new_branch&gt;</dt>
<dd>
<p>Name for the new branch.</p>
</dd>
<dt class="hdlist1">&lt;start_point&gt;</dt>
<dd>
<p>The name of a commit at which to start the new branch; see
<a href="git-branch.html">git-branch(1)</a> for details. Defaults to <code>HEAD</code>.</p>
<div class="paragraph">
<p>As a special case, you may use <code>"A...B"</code> as a shortcut for the
merge base of <code>A</code> and <code>B</code> if there is exactly one merge base. You can
leave out at most one of <code>A</code> and <code>B</code>, in which case it defaults to <code>HEAD</code>.</p>
</div>
</dd>
<dt class="hdlist1">&lt;tree-ish&gt;</dt>
<dd>
<p>Tree to checkout from (when paths are given). If not specified,
the index will be used.</p>
<div class="paragraph">
<p>As a special case, you may use <code>"A...B"</code> as a shortcut for the
merge base of <code>A</code> and <code>B</code> if there is exactly one merge base. You can
leave out at most one of <code>A</code> and <code>B</code>, in which case it defaults to <code>HEAD</code>.</p>
</div>
</dd>
<dt class="hdlist1">--</dt>
<dd>
<p>Do not interpret any more arguments as options.</p>
</dd>
<dt class="hdlist1">&lt;pathspec&gt;&#8230;&#8203;</dt>
<dd>
<p>Limits the paths affected by the operation.</p>
<div class="paragraph">
<p>For more details, see the <em>pathspec</em> entry in <a href="gitglossary.html">gitglossary(7)</a>.</p>
</div>
</dd>
</dl>
</div>
</div>
</div>
<div class="sect1">
<h2 id="_detached_head">DETACHED HEAD</h2>
<div class="sectionbody">
<div class="paragraph">
<p><code>HEAD</code> normally refers to a named branch (e.g. <code>master</code>). Meanwhile, each
branch refers to a specific commit. Let&#8217;s look at a repo with three
commits, one of them tagged, and with branch <code>master</code> checked out:</p>
</div>
<div class="listingblock">
<div class="content">
<pre>           HEAD (refers to branch 'master')
            |
            v
a---b---c  branch 'master' (refers to commit 'c')
    ^
    |
  tag 'v2.0' (refers to commit 'b')</pre>
</div>
</div>
<div class="paragraph">
<p>When a commit is created in this state, the branch is updated to refer to
the new commit. Specifically, <em>git commit</em> creates a new commit <code>d</code>, whose
parent is commit <code>c</code>, and then updates branch <code>master</code> to refer to new
commit <code>d</code>. <code>HEAD</code> still refers to branch <code>master</code> and so indirectly now refers
to commit <code>d</code>:</p>
</div>
<div class="listingblock">
<div class="content">
<pre>$ edit; git add; git commit

               HEAD (refers to branch 'master')
                |
                v
a---b---c---d  branch 'master' (refers to commit 'd')
    ^
    |
  tag 'v2.0' (refers to commit 'b')</pre>
</div>
</div>
<div class="paragraph">
<p>It is sometimes useful to be able to checkout a commit that is not at
the tip of any named branch, or even to create a new commit that is not
referenced by a named branch. Let&#8217;s look at what happens when we
checkout commit <code>b</code> (here we show two ways this may be done):</p>
</div>
<div class="listingblock">
<div class="content">
<pre>$ git checkout v2.0  # or
$ git checkout master^^

   HEAD (refers to commit 'b')
    |
    v
a---b---c---d  branch 'master' (refers to commit 'd')
    ^
    |
  tag 'v2.0' (refers to commit 'b')</pre>
</div>
</div>
<div class="paragraph">
<p>Notice that regardless of which checkout command we use, <code>HEAD</code> now refers
directly to commit <code>b</code>. This is known as being in detached <code>HEAD</code> state.
It means simply that <code>HEAD</code> refers to a specific commit, as opposed to
referring to a named branch. Let&#8217;s see what happens when we create a commit:</p>
</div>
<div class="listingblock">
<div class="content">
<pre>$ edit; git add; git commit

     HEAD (refers to commit 'e')
      |
      v
      e
     /
a---b---c---d  branch 'master' (refers to commit 'd')
    ^
    |
  tag 'v2.0' (refers to commit 'b')</pre>
</div>
</div>
<div class="paragraph">
<p>There is now a new commit <code>e</code>, but it is referenced only by <code>HEAD</code>. We can
of course add yet another commit in this state:</p>
</div>
<div class="listingblock">
<div class="content">
<pre>$ edit; git add; git commit

         HEAD (refers to commit 'f')
          |
          v
      e---f
     /
a---b---c---d  branch 'master' (refers to commit 'd')
    ^
    |
  tag 'v2.0' (refers to commit 'b')</pre>
</div>
</div>
<div class="paragraph">
<p>In fact, we can perform all the normal Git operations. But, let&#8217;s look
at what happens when we then checkout <code>master</code>:</p>
</div>
<div class="listingblock">
<div class="content">
<pre>$ git checkout master

               HEAD (refers to branch 'master')
      e---f     |
     /          v
a---b---c---d  branch 'master' (refers to commit 'd')
    ^
    |
  tag 'v2.0' (refers to commit 'b')</pre>
</div>
</div>
<div class="paragraph">
<p>It is important to realize that at this point nothing refers to commit
<code>f</code>. Eventually commit <code>f</code> (and by extension commit <code>e</code>) will be deleted
by the routine Git garbage collection process, unless we create a reference
before that happens. If we have not yet moved away from commit <code>f</code>,
any of these will create a reference to it:</p>
</div>
<div class="listingblock">
<div class="content">
<pre>$ git checkout -b foo   <b class="conum">(1)</b>
$ git branch foo        <b class="conum">(2)</b>
$ git tag foo           <b class="conum">(3)</b></pre>
</div>
</div>
<div class="colist arabic">
<ol>
<li>
<p>creates a new branch <code>foo</code>, which refers to commit <code>f</code>, and then
updates <code>HEAD</code> to refer to branch <code>foo</code>. In other words, we&#8217;ll no longer
be in detached <code>HEAD</code> state after this command.</p>
</li>
<li>
<p>similarly creates a new branch <code>foo</code>, which refers to commit <code>f</code>,
but leaves <code>HEAD</code> detached.</p>
</li>
<li>
<p>creates a new tag <code>foo</code>, which refers to commit <code>f</code>,
leaving <code>HEAD</code> detached.</p>
</li>
</ol>
</div>
<div class="paragraph">
<p>If we have moved away from commit <code>f</code>, then we must first recover its object
name (typically by using git reflog), and then we can create a reference to
it. For example, to see the last two commits to which <code>HEAD</code> referred, we
can use either of these commands:</p>
</div>
<div class="listingblock">
<div class="content">
<pre>$ git reflog -2 HEAD # or
$ git log -g -2 HEAD</pre>
</div>
</div>
</div>
</div>
<div class="sect1">
<h2 id="_argument_disambiguation">ARGUMENT DISAMBIGUATION</h2>
<div class="sectionbody">
<div class="paragraph">
<p>When there is only one argument given and it is not <code>--</code> (e.g. <code>git
checkout abc</code>), and when the argument is both a valid <code>&lt;tree-ish&gt;</code>
(e.g. a branch <code>abc</code> exists) and a valid <code>&lt;pathspec&gt;</code> (e.g. a file
or a directory whose name is "abc" exists), Git would usually ask
you to disambiguate.  Because checking out a branch is so common an
operation, however, <code>git checkout abc</code> takes "abc" as a <code>&lt;tree-ish&gt;</code>
in such a situation.  Use <code>git checkout -- &lt;pathspec&gt;</code> if you want
to checkout these paths out of the index.</p>
</div>
</div>
</div>
<div class="sect1">
<h2 id="_examples">EXAMPLES</h2>
<div class="sectionbody">
<div class="olist arabic">
<ol class="arabic">
<li>
<p>The following sequence checks out the <code>master</code> branch, reverts
the <code>Makefile</code> to two revisions back, deletes <code>hello.c</code> by
mistake, and gets it back from the index.</p>
<div class="listingblock">
<div class="content">
<pre>$ git checkout master             <b class="conum">(1)</b>
$ git checkout master~2 Makefile  <b class="conum">(2)</b>
$ rm -f hello.c
$ git checkout hello.c            <b class="conum">(3)</b></pre>
</div>
</div>
<div class="colist arabic">
<ol>
<li>
<p>switch branch</p>
</li>
<li>
<p>take a file out of another commit</p>
</li>
<li>
<p>restore <code>hello.c</code> from the index</p>
</li>
</ol>
</div>
<div class="paragraph">
<p>If you want to check out <em>all</em> C source files out of the index,
you can say</p>
</div>
<div class="listingblock">
<div class="content">
<pre>$ git checkout -- '*.c'</pre>
</div>
</div>
<div class="paragraph">
<p>Note the quotes around <code>*.c</code>.  The file <code>hello.c</code> will also be
checked out, even though it is no longer in the working tree,
because the file globbing is used to match entries in the index
(not in the working tree by the shell).</p>
</div>
<div class="paragraph">
<p>If you have an unfortunate branch that is named <code>hello.c</code>, this
step would be confused as an instruction to switch to that branch.
You should instead write:</p>
</div>
<div class="listingblock">
<div class="content">
<pre>$ git checkout -- hello.c</pre>
</div>
</div>
</li>
<li>
<p>After working in the wrong branch, switching to the correct
branch would be done using:</p>
<div class="listingblock">
<div class="content">
<pre>$ git checkout mytopic</pre>
</div>
</div>
<div class="paragraph">
<p>However, your "wrong" branch and correct <code>mytopic</code> branch may
differ in files that you have modified locally, in which case
the above checkout would fail like this:</p>
</div>
<div class="listingblock">
<div class="content">
<pre>$ git checkout mytopic
error: You have local changes to 'frotz'; not switching branches.</pre>
</div>
</div>
<div class="paragraph">
<p>You can give the <code>-m</code> flag to the command, which would try a
three-way merge:</p>
</div>
<div class="listingblock">
<div class="content">
<pre>$ git checkout -m mytopic
Auto-merging frotz</pre>
</div>
</div>
<div class="paragraph">
<p>After this three-way merge, the local modifications are <em>not</em>
registered in your index file, so <code>git diff</code> would show you what
changes you made since the tip of the new branch.</p>
</div>
</li>
<li>
<p>When a merge conflict happens during switching branches with
the <code>-m</code> option, you would see something like this:</p>
<div class="listingblock">
<div class="content">
<pre>$ git checkout -m mytopic
Auto-merging frotz
ERROR: Merge conflict in frotz
fatal: merge program failed</pre>
</div>
</div>
<div class="paragraph">
<p>At this point, <code>git diff</code> shows the changes cleanly merged as in
the previous example, as well as the changes in the conflicted
files.  Edit and resolve the conflict and mark it resolved with
<code>git add</code> as usual:</p>
</div>
<div class="listingblock">
<div class="content">
<pre>$ edit frotz
$ git add frotz</pre>
</div>
</div>
</li>
</ol>
</div>
</div>
</div>
<div class="sect1">
<h2 id="_see_also">SEE ALSO</h2>
<div class="sectionbody">
<div class="paragraph">
<p><a href="git-switch.html">git-switch(1)</a>,
<a href="git-restore.html">git-restore(1)</a></p>
</div>
</div>
</div>
<div class="sect1">
<h2 id="_git">GIT</h2>
<div class="sectionbody">
<div class="paragraph">
<p>Part of the <a href="git.html">git(1)</a> suite</p>
</div>
</div>
</div>
</div>
<div id="footer">
<div id="footer-text">
Last updated 2021-03-27 09:47:30 UTC
</div>
</div>
</body>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  sion Category="windows.backgroundTasks" EntryPoint="ContentDeliveryManager.Background.ProcessCreativeEventsTask">
          <BackgroundTasks>
            <Task Type="systemEvent" />           <!-- Custom system trigger (WNF notifications) -->
          </BackgroundTasks>
        </Extension>
        <Extension Category="windows.backgroundTasks" EntryPoint="ContentDeliveryManager.Background.ProcessCreativeEventsBatterySaverOverrideTask">
          <BackgroundTasks>
            <Task Type="systemEvent" />           <!-- Custom system trigger (WNF notifications) -->
          </BackgroundTasks>
        </Extension>
        <Extension Category="windows.backgroundTasks" EntryPoint="ContentDeliveryManager.Background.RemediateContentTask">
          <BackgroundTasks>
            <Task Type="systemEvent" />           <!-- Custom system trigger (WNF notifications) -->
          </BackgroundTasks>
        </Extension>
        <Extension Category="windows.backgroundTasks" EntryPoint="ContentDeliveryManager.Background.EnableMonitoringTask">
          <BackgroundTasks>
            <Task Type="timer" />                 <!-- Alarm trigger (scheduling) -->
          </BackgroundTasks>
        </Extension>
        <Extension Category="windows.backgroundTasks" EntryPoint="ContentDeliveryManager.Background.WatchdogTask">
          <BackgroundTasks>
            <Task Type="timer" />
            <!-- Alarm trigger (scheduling) -->
          </BackgroundTasks>
        </Extension>
        <Extension Category="windows.backgroundTasks" EntryPoint="ContentDeliveryManager.Background.RawNotificationChannelRegistrationTask">
          <BackgroundTasks>
            <Task Type="systemEvent" />           <!-- Internet available trigger -->
          </BackgroundTasks>
        </Extension>
        <Extension Category="windows.backgroundTasks" EntryPoint="ContentDeliveryManager.Background.FeatureReportingDeviceUsageConsolidationTask">
          <BackgroundTasks>
            <Task Type="systemEvent" />           <!-- Custom system trigger (WNF notifications) -->
          </BackgroundTasks>
        </Extension>
        <Extension Category="windows.backgroundTasks" EntryPoint="ContentDeliveryManager.Background.FeatureReportingUniqueUsageConsolidationTask">
          <BackgroundTasks>
            <Task Type="systemEvent" />           <!-- Custom system trigger (WNF notifications) -->
          </BackgroundTasks>
        </Extension>
        <Extension Category="windows.backgroundTasks" EntryPoint="ContentDeliveryManager.Background.FeatureReportingErrorConsolidationTask">
          <BackgroundTasks>
            <Task Type="systemEvent" />           <!-- Custom system trigger (WNF notifications) -->
          </BackgroundTasks>
        </Extension>
        <Extension Category="windows.backgroundTasks" EntryPoint="ContentDeliveryManager.Background.FeatureReportingInternalLoggingTask">
          <BackgroundTasks>
            <Task Type="timer" />                 <!-- Alarm trigger (scheduling) -->
          </BackgroundTasks>
        </Extension>
        <Extension Category="windows.backgroundTasks" EntryPoint="ContentDeliveryManager.Background.RawNotificationHandlerTask">
          <BackgroundTasks>
            <Task Type="pushNotification" />      <!-- Push notification trigger -->
          </BackgroundTasks>
        </Extension>
        <Extension Category="windows.backgroundTasks" EntryPoint="ContentDeliveryManager.Background.FlushPlacementsEventCacheTask">
          <BackgroundTasks>
            <Task Type="timer" />
            <!-- Alarm trigger (scheduling) -->
          </BackgroundTasks>
        </Extension>
        <Extension Category = "windows.backgroundTasks" EntryPoint = "ContentDeliveryManager.Background.NotificationEventListenerTask">
          <BackgroundTasks>
            <Task Type="systemEvent" />           <!-- Notification Manager Event Listener -->
          </BackgroundTasks>
        </Extension>
        <Extension Category="windows.backgroundTasks" EntryPoint="ContentDeliveryManager.Background.TriggerManagerTimerTask">
          <BackgroundTasks>
            <Task Type="timer" />                 <!-- Trigger Manager timer (scheduling) -->
          </BackgroundTasks>
        </Extension>
        <Extension Category = "windows.backgroundTasks" EntryPoint = "ContentDeliveryManager.Background.TriggerManagerSystemEventTask">
          <BackgroundTasks>
            <Task Type="systemEvent" />           <!-- Trigger Manager Event Listener -->
          </BackgroundTasks>
        </Extension>
        <Extension Category = "windows.backgroundTasks" EntryPoint = "ContentDeliveryManager.Background.ProcessMobilityActivitiesTask">
          <BackgroundTasks>
            <Task Type="systemEvent" />
            <!-- Trigger Manager Event Listener -->
          </BackgroundTasks>
        </Extension>
        <Extension Category = "windows.backgroundTasks" EntryPoint = "ContentDeliveryManager.Background.ManageMobilityProcessingTask">
          <BackgroundTasks>
            <Task Type="systemEvent" />
            <!-- Trigger Manager Event Listener -->
          </BackgroundTasks>
        </Extension>
        <Extension Category="windows.preInstalledConfigTask" EntryPoint="ContentDeliveryManager.Background.ConfigurationTask" />
        <uap:Extension Category="windows.appService" EntryPoint="ContentDeliveryManager.Background.AppServiceTask">
          <uap:AppService Name="microsoft-contentdeliverymanager" />
        </uap:Extension>
        <uap:Extension Category="windows.appService" EntryPoint="ContentDeliveryManager.Background.PhoneBrokerAppServiceTask">
          <uap3:AppService Name="microsoft-content-phonebroker" SupportsRemoteSystems="true" />
        </uap:Extension>
      </Extensions>
    </Application>
  </Applications>

  <Dependencies>
    <TargetDeviceFamily Name="Windows.Universal" MinVersion="10.0.0.0" MaxVersionTested="10.0.0.0" />
  </Dependencies>

  <Extensions>
    <Extension Category="windows.activatableClass.inProcessServer">
      <InProcessServer>
        <Path>ContentDeliveryManager.Background.dll</Path>
        <ActivatableClass ActivatableClassId="ContentDeliveryManager.Background.RegistrationTask" ThreadingModel="both" />
        <ActivatableClass ActivatableClassId="ContentDeliveryManager.Background.ConfigurationTask" ThreadingModel="both" />
        <ActivatableClass ActivatableClassId="ContentDeliveryManager.Background.RefreshCacheTask" ThreadingModel="both" />
        <ActivatableClass ActivatableClassId="ContentDeliveryManager.Background.HandleNewCreativesTask" ThreadingModel="both" />
        <ActivatableClass ActivatableClassId="ContentDeliveryManager.Background.UpdatePlacementTask" ThreadingModel="both" />
        <ActivatableClass ActivatableClassId="ContentDeliveryManager.Background.MaintenanceTask" ThreadingModel="both" />
        <ActivatableClass ActivatableClassId="ContentDeliveryManager.Background.ServicingTask" ThreadingModel="both" />
        <ActivatableClass ActivatableClassId="ContentDeliveryManager.Background.AppServiceTask" ThreadingModel="both" />
        <ActivatableClass ActivatableClassId="ContentDeliveryManager.Background.CustomEventListenerTask" ThreadingModel="both" />
        <ActivatableClass ActivatableClassId="ContentDeliveryManager.Background.NotificationChannelTask" ThreadingModel="both" />
        <ActivatableClass ActivatableClassId="ContentDeliveryManager.Background.FlushPlacementsEventCacheTask" ThreadingModel="both" />
        <ActivatableClass ActivatableClassId="ContentDeliveryManager.Background.RawNotificationChannelRegistrationTask" ThreadingModel="both" />
        <ActivatableClass ActivatableClassId="ContentDeliveryManager.Background.RawNotificationHandlerTask" ThreadingModel="both" />
        <ActivatableClass ActivatableClassId="ContentDeliveryManager.Background.FeatureReportingDeviceUsageConsolidationTask" ThreadingModel="both" />
        <ActivatableClass ActivatableClassId="ContentDeliveryManager.Background.FeatureReportingUniqueUsageConsolidationTask" ThreadingModel="both" />
        <ActivatableClass ActivatableClassId="ContentDeliveryManager.Background.FeatureReportingErrorConsolidationTask" ThreadingModel="both" />
        <ActivatableClass ActivatableClassId="ContentDeliveryManager.Background.FeatureReportingInternalLoggingTask" ThreadingModel="both" />
        <ActivatableClass ActivatableClassId="ContentDeliveryManager.Background.ProcessCreativeEventsTask" ThreadingModel="both" />
        <ActivatableClass ActivatableClassId="ContentDeliveryManager.Background.ProcessCreativeEventsBatterySaverOverrideTask" ThreadingModel="both" />
        <ActivatableClass ActivatableClassId="ContentDeliveryManager.Background.RemediateContentTask" ThreadingModel="both" />
        <ActivatableClass ActivatableClassId="ContentDeliveryManager.Background.EnableMonitoringTask" ThreadingModel="both" />
        <ActivatableClass ActivatableClassId="ContentDeliveryManager.Background.WatchdogTask" ThreadingModel="both" />
        <ActivatableClass ActivatableClassId="ContentDeliveryManager.Background.NotificationEventListenerTask" ThreadingModel="both" />
        <ActivatableClass Acti