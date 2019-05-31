//* http://allwebco-templates.com/support/S_audio_onmouseover.htm. http://www.text2speech.org/


//* Home Page       SOUND
function playHomePage() {
if (navigator.appName == "Microsoft Internet Explorer" && (navigator.appVersion.indexOf("MSIE 7")!=-1) || (navigator.appVersion.indexOf("MSIE 8")!=-1)) {
if (document.all)
 {
  document.all.sound.src = "responsiveSound\Navigation\HomePage.mp3";
 }
}

else {
{
var audio = document.getElementById("HomePageID");
audio.play();
}
}
}

//*      Login       SOUND 
function playLogin() {
if (navigator.appName == "Microsoft Internet Explorer" && (navigator.appVersion.indexOf("MSIE 7")!=-1) || (navigator.appVersion.indexOf("MSIE 8")!=-1)) {
if (document.all)
 {
  document.all.sound.src = "responsiveSound\Navigation\Login.mp3";
 }
}

else {
{
var audio = document.getElementById("LoginID");
audio.play();
}
}
}

//*     Accommodation        SOUND
function playAccommodation() {
if (navigator.appName == "Microsoft Internet Explorer" && (navigator.appVersion.indexOf("MSIE 7")!=-1) || (navigator.appVersion.indexOf("MSIE 8")!=-1)) {
if (document.all)
 {
  document.all.sound.src = "responsiveSound\Navigation\Accommodation.mp3";
 }
}

else {
{
var audio = document.getElementById("AccommodationID");
audio.play();
}
}
}

//*      My Profile       SOUND 
function playMyProfile() {
if (navigator.appName == "Microsoft Internet Explorer" && (navigator.appVersion.indexOf("MSIE 7")!=-1) || (navigator.appVersion.indexOf("MSIE 8")!=-1)) {
if (document.all)
 {
  document.all.sound.src = "responsiveSound\Navigation\MyProfile.mp3";
 }
}

else {
{
var audio = document.getElementById("MyProfileID");
audio.play();
}
}
}

//*      Booked Viewing       SOUND 
function playBookedViewing() {
if (navigator.appName == "Microsoft Internet Explorer" && (navigator.appVersion.indexOf("MSIE 7")!=-1) || (navigator.appVersion.indexOf("MSIE 8")!=-1)) {
if (document.all)
 {
  document.all.sound.src = "responsiveSound\Navigation\BookedViewing.mp3";
 }
}

else {
{
var audio = document.getElementById("BookedViewingID");
audio.play();
}
}
}

//*      Logout       SOUND 
function playLogout() {
if (navigator.appName == "Microsoft Internet Explorer" && (navigator.appVersion.indexOf("MSIE 7")!=-1) || (navigator.appVersion.indexOf("MSIE 8")!=-1)) {
if (document.all)
 {
  document.all.sound.src = "responsiveSound\Navigation\Logout.mp3";
 }
}

else {
{
var audio = document.getElementById("LogoutID");
audio.play();
}
}
}

//*      Accessability       SOUND 
function playAccessability() {
if (navigator.appName == "Microsoft Internet Explorer" && (navigator.appVersion.indexOf("MSIE 7")!=-1) || (navigator.appVersion.indexOf("MSIE 8")!=-1)) {
if (document.all)
 {
  document.all.sound.src = "responsiveSound\Navigation\Accessability.mp3";
 }
}

else {
{
var audio = document.getElementById("AccessabilityID");
audio.play();
}
}
}

//*      No Entry       SOUND 
function playNoEntry() {
if (navigator.appName == "Microsoft Internet Explorer" && (navigator.appVersion.indexOf("MSIE 7")!=-1) || (navigator.appVersion.indexOf("MSIE 8")!=-1)) {
if (document.all)
 {
  document.all.sound.src = "responsiveSound\Navigation\NoEntry.mp3";
 }
}

else {
{
var audio = document.getElementById("NoEntryID");
audio.play();
}
}
}