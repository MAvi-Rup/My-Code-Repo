ustom_filter_lists label h1 {
  display: inline;
  font-size: 18px;
  font-weight: normal;
}
/* Visually hide the timestamp - screen readers only. */
.timestamp_info {
  opacity: 0;
  position: absolute;
  color: var(--help-icon-color);
}
.subscription_info {
  color: var(--help-icon-color);
}

/* CUSTOMIZE TAB */

.accordion-icon {
  line-height: 0;
  pointer-events: none;
  transition-delay: 0s;
  transition-duration: 0.5s;
  transition-property: all;
  transition-timing-function: ease-in-out;
}
.accordion-icon.upward {
  pointer-events: none;
  transform: rotate(180deg);
}
.accordion-icon .material-icons {
  color: var(--customize-dropdown-menu-icon-color);
}
.controlsLink > span {
  pointer-events: none;
}
.addControls {
  padding-bottom: 8px;
}
#btnCleanUp {
  opacity: 0.7;
  margin-left: 9px;
}
#btnCleanUp:hover {
  opacity: 1;
  -webkit-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
  cursor: pointer;
}
#txtFiltersAdvanced,
#txtExcludeFiltersAdvanced {
  line-height: 15px;
  width: 100%;
  min-height: 200px;
  margin-top: 8px;
  margin-bottom: 8px;
}
.customize-entry-table {
  width: 100%;
  line-height: 25px;
}
.customize-entry-table input[type="text"] {
  width: 100%;
  margin-top: 0px;
}
.savereminder {
  margin-right: 20px;
}

/* Support tab */
h2[i18n="needhelp"] {
  margin-bottom: 19px;
}
h2[i18n="aboutadblock"] {
  margin-top: 65px;
}
h2[i18n="feedback_title"] {
  margin-top: 65px;
}
h2[i18n="debuginfo"] {
  max-width: 440px;
}
#copiedDebugData,
#copyDebugData {
  font-size: 15px;
  padding: 0 15px;
}
#btnCopyDebugData {
  display: inline-flex;
  white-space: nowrap;
}
#debugInfo::selection {
  background: Cornflowerblue;
}
#debugInfo::-moz-selection {
  background: Cornflowerblue;
}
.checkmark-circle {
  width: 16px;
  height: 16px;
  position: absolute;
  display: inline-block;
  vertical-align: top;
}
.checkmark-circle .checkmark {
  border-radius: 5px;
}
.checkmark-circle .checkmark.draw::after {
  animation-delay: 10ms;
  animation-duration: 350ms;
  animation-timing-function: ease;
  animation-name: checkmark;
  transform: scaleX(-1) rotate(135deg);
  animation-fill-mode: forwards;
}
.checkmark-circle .checkmark::after {
  opacity: 0;
  height: 16px;
  width: 8px;
  transform-origin: left top;
  border-right: 4px solid white;
  border-top: 4px solid white;
  border-radius: 2px !important;
  content: "";
  left: -65px;
  top: 9px;
  position: absolute;
}

@keyframes checkmark {
  0% {
    height: 0;
    width: 0;
    opacity: 1;
  }
  20% {
    height: 0;
    width: 8px;
    opacity: 1;
  }
  40% {
    height: 8px;
    width: 8px;
    opacity: 1;
  }
  100% {
    height: 16px;
    width: 8px;
    opacity: 1;
  }
}

#feedback-info {
  max-width: 440px;
}
.feedback-button {
  border: 1px solid var(--mab-feedback-button-border);
  min-width: 150px;
  font-size: 15px;
  font-weight: 500;
  color: var(--options-page-accent-text);
  cursor: pointer;
  background: var(--background-color);
  padding: 0 7px;
}
.feedback-button:hover {
  box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.15);
}
/* MISC */
.pointer {
  cursor: pointer;
}
label {
  cursor: pointer;
  width: fit-content;
}
input[type="button"],
select {
  -webkit-box-shadow: inset 0px 1px 0px 0px white;
  box-shadow: inset 0px 1px 0px 0px white;
  border: 1px solid #dcdcdc;
  display: inline-block;
  color: #000000;
  font-style: normal;
  font-family: "Lato", Arial, sans-serif;
  text-decoration: none;
  text-align: center;
  border-radius: 2px;
}
input[type="button"]:hover,
select:hover {
  background: -webkit-gradient(
    linear,
    left top,
    left bottom,
    color-stop(0.05, #c7c7c7),
    color-stop(1, #ededed)
  );
  background-color: #dfdfdf;
  box-shadow: none;
  -webkit-box-shadow: none;
}
input[type="button"]:active {
  position: relative;
  top: 1px;
}
input[type="button"]:focus {
  outline: none;
  box-shadow: none;
}
input[type="radio"],
input[type="checkbox"] {
  height: 1.3em;
  width: 1.3em;
  vertical-align: middle;
  margin: 0px 0.4em 0.3em 0px;
  border: 1px solid rgba(0, 0, 0, 0.3);
  background: -webkit-linear-gradient(#fcfcfc, #dadada);
  -webkit-appearance: none;
  transition: box-shadow 200ms;
  -webkit-transition: box-shadow 200ms;
  box-shadow: inset 1px 1px 0px #fff, 0 1px 1px rgba(0, 0, 0, 0.1);
}
input[type="radio"] {
  -webkit-border-radius: 100%;
  border-radius: 100%;
  margin-left: 5px;
}
input[type="checkbox"] {
  -webkit-border-radius: 2px;
  border-radius: 2px;
}
input[type="radio"]:not(:disabled):hover,
input[type="checkbox"]:not(:disabled):hover {
  border-color: rgba(0, 0, 0, 0.5);
  box-shadow: inset 1px 1px 0px #fff, 0px 0px 4px rgba(0, 0, 0, 0.3);
}
input[type="radio"]:active:not(:disabled),
input[type="checkbox"]:active:not(:disabled) {
  background-image: -webkit-linear-gradient(#c2c2c2, #efefef);
  box-shadow: inset 1px 1px 0 rgba(0, 0, 0, 0.2), inset -1px -1px 0px rgba(255, 255, 255, 0.6);
  border-color: rgba(0, 0, 0, 0.5);
}
input[type="radio"]:focus,
input[type="checkbox"]:focus {
  outline: none;
  box-shadow: none;
}
input[type="radio"]:checked,
input[type="checkbox"]:checked {
  border-color: rgba(0, 0, 0, 0.5);
  box-shadow: inset 1px 1px 0px #fff, 0px 0px 4px rgba(0, 0, 0, 0.3);
  direction: ltr;
}
input[type="radio"]:checked::before {
  display: block;
  height: 0.38em;
  width: 0.37em;
  position: relative;
  left: 0.38em;
  top: 0.35em;
  background: rgba(0, 0, 0, 0.7);
  border-radius: 100%;
  content: "";
}
input[type="checkbox"]:checked::before {
  color: rgba(0, 0, 0, 0.7);
  content: "\2713";
  margin-left: 20%;
}
input:disabled {
  opacity: 0.6;
  box-shadow: none;
  background: rgba(0, 0, 0, 0.1);
  box-shadow: none;
}
textarea:disabled,
input:disabled + label {
  opacity: 0.6;
  cursor: default;
  -webkit-user-select: none;
}
textarea,
input[type="text"],
input[type="email"] {
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  border: 1px solid var(--main-text-color);
  border-radius: 6px;
  color: var(--main-text-color);
  padding: 5px;
  margin: 8px 0px;
  line-height: 25px;
  background-color: var(--background-color);
}
textarea:focus,
input[type="text"]:focus,
input[type="email"]:focus {
  outline: none;
  box-shadow: 0 5px 15px 0 rgba(10, 14, 71, 0.2);
  -webkit-box-shadow: 0 5px 15px 0 rgba(10, 14, 71, 0.2);
}
textarea.widest {
  font-size: 12px;
  line-height: 15px;
  min-height: 200px;
}

/* NEW CHECKBOX IN GENERAL, FILTER TABS AND BUG-REPORT */

.checkbox {
  text-indent: 0;
}
.checkbox > * {
  text-indent: 0;
  position: absolute;
  left: 0;
}
.checkbox > input[type="checkbox"] {
  opacity: 0;
  margin: 0;
  padding: 0;
  height: 100%;
  width: 100%;
}
.checkbox > input[type="checkbox"]:hover {
  cursor: pointer;
}
.checkbox > i {
  pointer-events: none;
}
.checkbox > input:checked ~ i.checked,
.checkbox > input:not(:checked) ~ i.unchecked {
  display: inline-block;
}
.checkbox > input:checked ~ i.unchecked,
.checkbox > input:not(:checked) ~ i.checked {
  display: none;
}
.checkbox .unchecked {
  font-weight: bold;
  color: var(--not-selected-checkbox-bg-color);
}
.checkbox ~ label {
  padding-left: 10px;
  font-size: 18px;
}
.checkbox .checkbox-icon {
  color: var(--checkbox-bg-color);
}

/* BORDERED SPEECH BUBBLE */

.speech-bubble {
  min-height: 60px;
  width: fit-content;
  max-width: 600px;
  min-width: 300px;
  margin: 0 auto;
  margin-top: 50px;
  padding: 15px 25px;
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: center;
  border-radius: 10px;
  border: 2px solid var(--speech-bubble-border-color);
  background-color: var(--background-color);
  color: var(--main-text-color);
  z-index: -1;
}
.speech-bubble::after {
  content: "";
  width: 15px;
  height: 15px;
  border-radius: 4px;
  transform: rotate(75deg) skew(15deg, 15deg);
  border: 2px solid var(--speech-bubble-border-color);
  position: absolute;
  background-color: var(--background-color);
  left: -3px;
  bottom: -5px;
  z-index: 1;
}
.speech-bubble::before {
  content: "";
  width: 15px;
  height: 20px;
  background-color: var(--background-color);
  position: absolute;
  left: 0;
  bottom: 0;
  z-index: 2;
}
.speech-bubble > .speech-bubble-content {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  z-index: 3;
}

/* THEMES */

.theme-box {
  width: 80px;
  height: 80px;
  border-radius: 6px;
  overflow: hidden;
}
.theme-box.selected {
  pointer-events: none;
}
.theme-box:not(.selected):hover {
  cursor: pointer;
  box-shadow: 0 5px 15px 0 rgba(10, 14, 71, 0.2);
}
.theme-box .material-icons.overlay-icon {
  display: none;
  color: #f4f4f4;
}
.theme-box:not(.selected):hover .material-icons.overlay-icon {
  display: block;
  z-index: 1;
  color: white;
}
.theme-box:not(.selected):hover .theme-hover-overlay-mask {
  opacity: 0.75;
  background-color: #333;
  border-radius: 6px;
  position: absolute;
  height: 100%;
  width: 100%;
}
.theme-box input.invisible-radio-button {
  position: absolute;
  height: 100%;
  width: 100%;
  opacity: 0;
  top: 0;
  left: 0;
  margin: 0;
  border: none;
}
.theme-box:not(.selected) input.invisible-radio-button:hover {
  cursor: pointer;
}
.material-icons.theme-selected-icon {
  display: none;
  top: -8px;
  left: 64px;
  position: absolute;
  z-index: 1;
  color: var(--checkbox-bg-color);
}
.theme-selected-icon:hover {
  cursor: default;
}
.theme-box.selected + .theme-selected-icon {
  display: block;
}
.theme-wrapper {
  position: relative;
  margin: 0 32px 32px 0;
}
.theme-hover-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
  pointer-events: none;
}
.theme-section-title {
  display: block;
  margin-top: 15px;
  margin-bottom: 15px;
  line-height: normal;
}
.theme-section-title-top {
  display: none;
}
.theme-title {
  font-size: 16px;
  font-weight: normal;
  line-height: normal;
  margin-top: 17px;
  margin-bottom: 29px;
}
section .theme-section-row {
  width: 100%;
  display: flex;
  justify-content: flex-start;
  flex-wrap: wrap;
  max-width: 448px;
  min-width: 336px;
}
.theme-section {
  display: flex;
  flex-wrap: wrap-reverse;
  justify-content: space-between;
}
#mab-themes .popup-menu-themes .theme-selection {
  flex: 1 1 51%;
}
#mab-themes .options-page-themes .theme-selection {
  flex: 1 1 48.6%;
}
.themes-title {
  margin-left: 0;
}
.popup-menu-themes {
  margin-bottom: 62px;
  margin-right: 90px;
}
.options-page-themes {
  margin-bottom: 22px;
  margin-right: 31px;
}
.theme-image {
  border-radius: 6px;
  box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.2);
}
.options-page-theme-preview {
  width: 359px;
  height: 320px;
}
@media screen and (max-width: 999px) {
  #mab-themes .theme-section-title {
    display: none;
  }
  #mab-themes .theme-section-title-top {
    display: block;
    margin-top: 15px;
    margin-bottom: 15px;
    line-height: normal;
  }
  #mab-themes .theme-image {
    margin-bottom: 48px;
  }
  #mab-themes .theme-title {
    margin-bottom: 16px;
    margin-top: 0;
  }
  #mab-themes section .theme-section-row {
    max-width: 336px;
  }
  #mab-themes .popup-menu-themes {
    margin-bottom: 48px;
  }
}

/* PREMIUM SYNC CTA */

.sync-cta {
  max-width: 984px;
  min-height: 60px;
  margin-bottom: 40px;
  margin-left: auto;
  margin-right: auto;
  display: flex;
  align-items: flex-end;
}

.get-sync-cta,
.goodbye-sync-cta {
  width: 100%;
  padding-bottom: 10px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.sync-cta p {
  display: inline;
  margin: 0;
  font-size: 18px;
  font-weight: normal;
  font-style: normal;
  line-height: normal;
  color: var(--options-page-accent-text);
  overflow-wrap: break-word;
  max-width: 776px;
}

.user-actions {
  display: flex;
  align-items: center;
  margin-left: 60px;
}

.user-actions a {
  font-size: 14px;
  font-weight: bold;
  max-width: 176px;
  height: 40px;
}

.user-actions button {
  border-radius: 6px;
  width: 40px;
  height: 40px;
  text-align: center;
  background: none;
  border: none;
  margin-left: 24px;
}

.user-actions button:hover {
  cursor: pointer;
  color: var(--main-text-color);
  background-color: var(--popup-block-ads-bg-color);
}

.user-actions button > i {
  pointer-events: none;
}

.status_msg {
  color: var(--options-premium-badge);
  border: 0.5px solid var(--options-premium-badge);
  border-radius: 2px;
  line-height: 14px;
  font-weight: bold;
  font-size: 8px;
  display: none;
  padding-left: 6px;
  padding-right: 6px;
  margin-left: 10px;
  text-transform: uppercase;
  white-space: pre;
  margin-top: 6px;
}

/* SIDEBAR */

#sidebar {
  --default-sidebar-width: 204px;
  --small-with-icons-width: 60px;
}
#sidebar {
  width: var(--default-sidebar-width, 204px);
  position: fixed;
  left: 0px;
  top: 0px;
  bottom: 0px;
  max-width: 200px;
  z-index: 1;
  transition: background-color 250ms linear;
  -webkit-transition: background-color 250ms linear;
  background-color: var(--sidebar-bg-color);
}
#sidebar-content {
  position: relative;
  display: flex;
  display: -webkit-flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  height: 100%;
}
#sidebar-adblock-logo {
  width: 75%;
  margin-left: calc(25% / 2);
  height: auto;
  margin-top: 30px;
  margin-bottom: 30px;
  display: inline-block;
}
#sidebar-adblock-logo-narrow {
  display: none;
}
#sidebar-content-top,
#sidebar-content-bottom {
  display: flex;
  display: -webkit-flex;
  flex-direction: column;
  align-items: center;
}
#sidebar-content-top {
  width: 100%;
}
#sidebar-content-top #adblock-logo-link {
  height: 100px;
  width: 