﻿<?php
/*
+ ----------------------------------------------------------------------------+
|     esGlobalBan - Language File.
|
|     $Source: /cvsroot/banned/languages/English/lan_configuration.php,v $
|     $Revision: 1.0 $
|     $Date: 2009/07/02 30:36:39 $
|     $Author: Odonel $
+----------------------------------------------------------------------------+
*/

$LAN_CONFIGURATION_001 = 'Please enter a valid email address.';
$LAN_CONFIGURATION_002 = 'is already in the list';
$LAN_CONFIGURATION_003 = 'You must specify a directory for demos.';
$LAN_CONFIGURATION_004 = "You must specify a demo size limit.";
$LAN_CONFIGURATION_005 = "You must specify ban message.";
$LAN_CONFIGURATION_006 = 'You must specify the number of days to keep a pending ban banned for.';
$LAN_CONFIGURATION_007 = 'You must specify a hash code for security reasons.';
$LAN_CONFIGURATION_008 = 'You must specify a SMF table prefix.';
$LAN_CONFIGURATION_009 = 'You must specify a SMF group that will have full power privileges.';
$LAN_CONFIGURATION_010 = 'You must specify a SMF group that will have ban manager privileges.';
$LAN_CONFIGURATION_011 = 'You must specify a SMF group that will have admin privileges.';
$LAN_CONFIGURATION_012 = 'You must specify a SMF group that will have member privileges.';
$LAN_CONFIGURATION_013 = 'You must specify a SMF group that will have no immediate powers.';
$LAN_CONFIGURATION_014 = 'You must specify user creation code.';
$LAN_CONFIGURATION_015 = 'Version Information';
$LAN_CONFIGURATION_016 = 'Your Version:';
$LAN_CONFIGURATION_017 = 'Website Settings';
$LAN_CONFIGURATION_018 = 'Site Name';
$LAN_CONFIGURATION_019 = 'This is the name of your community that displays in the title bar of the browser.';
$LAN_CONFIGURATION_020 = 'Logo';
$LAN_CONFIGURATION_021 = 'This must be the exact file name of your logo image found in the images directory. (dislpays at the top of the page)';
$LAN_CONFIGURATION_022 = 'Official Version:';
$LAN_CONFIGURATION_023 = 'Enable Forum Link';
$LAN_CONFIGURATION_024 = 'This will add a menu item that will go to your community forum.';
$LAN_CONFIGURATION_025 = 'Yes';
$LAN_CONFIGURATION_026 = 'No';
$LAN_CONFIGURATION_027 = 'Forum Address';
$LAN_CONFIGURATION_028 = 'Enter in the URL of your forum if you have enabled the forum link.';
$LAN_CONFIGURATION_029 = 'Bans Per Page';
$LAN_CONFIGURATION_030 = 'This sets the number of bans to be displayed per page on the ban list page.';
$LAN_CONFIGURATION_031 = 'Number of Page Links';
$LAN_CONFIGURATION_032 = "The number of links to show before and after selected page (IE: set at \'2\' you would see \'1 2 ... 10 11 [12] 13 14 ... 23 24\').";
$LAN_CONFIGURATION_033 = 'Demo Directory';
$LAN_CONFIGURATION_034 = 'The directory relative to the root of this webpage.  By default it is set to the demos folder.';
$LAN_CONFIGURATION_035 = 'Demo Size Limit(MB)';
$LAN_CONFIGURATION_036 = 'The max demo size in MB that can be uploaded.  This can not be higher than what is defined in the php.ini configuration file.';
$LAN_CONFIGURATION_037 = 'User Create Code';
$LAN_CONFIGURATION_038 = 'This is the code that you can give to members/admins to create their own account to access this site if you are running in standalone mode.';
$LAN_CONFIGURATION_039 = 'Send Emails On Ban';
$LAN_CONFIGURATION_040 = 'If yes, all emails listed below will recieve an email when a new ban is added.';
$LAN_CONFIGURATION_041 = 'Send Emails On Demo Add';
$LAN_CONFIGURATION_042 = 'If yes, all emails listed below will recieve an email when a new demo is added.';
$LAN_CONFIGURATION_043 = 'Email Address of Sender';
$LAN_CONFIGURATION_044 = "This is the \'from\' address the emails below will see when they recieve an email for newly added bans or demos.";
$LAN_CONFIGURATION_045 = 'Email Addresses to Recieve Ban and Demo Notices';
$LAN_CONFIGURATION_046 = 'The email address of people you wish to recieve ban add or demo add notifications.';
$LAN_CONFIGURATION_047 = 'Add >>';
$LAN_CONFIGURATION_048 = '<< Remove';
$LAN_CONFIGURATION_049 = 'Ban Settings';
$LAN_CONFIGURATION_050 = 'Ban Message';
$LAN_CONFIGURATION_051 = "The message that banned users will see when they attempt to connect to your servers. Use the Var \'gb_time\' to add the lenght and \'gb_reason\' to add the reason of the ban in the message, example: You are banned gb_time because gb_reason. Visit www.yourweb.com/banned/ for more info.";
$LAN_CONFIGURATION_052 = 'Allow Admins to be Banned';
$LAN_CONFIGURATION_053 = 'Set this to true to allow admins to ban other admins.';
$LAN_CONFIGURATION_054 = 'Days to keep pending bans banned';
$LAN_CONFIGURATION_055 = "The number of days a ban in pending mode should be banned for.  This only applies to bans greater than 1 hour and issued by a member.  The ban will be no different from an inactive ban after this number of days if it is not removed from pending status.  Set to \'0\' to let anyone banned by a member for more than an hour to be able to rejoin instantly.";
$LAN_CONFIGURATION_056 = 'Remove pending on demo upload';
$LAN_CONFIGURATION_057 = 'Remove the pending status of a ban if a member uploads a demo for the pending ban.';
$LAN_CONFIGURATION_058 = 'Hash Code';
$LAN_CONFIGURATION_059 = 'This is a secret code that is used by the ES script to talk to the web server when banning.  This is to prevent some random person from adding a ban.';
$LAN_CONFIGURATION_060 = 'Teach Admins';
$LAN_CONFIGURATION_061 = "Set this to yes if you wish to display the \'Type !banmenu\' message after a member/admin dies.  This is to teach or remind members how to ban.";
$LAN_CONFIGURATION_062 = 'SMF Integration Settings';
$LAN_CONFIGURATION_063 = 'Enable SMF Integration';
$LAN_CONFIGURATION_064 = 'Enable this to integrate with your SMF boards and use the SMF member groups instead.  The SMF tables must start with smf_.  The GlobalBan web pages must be installed under your Forums folder (yoursite.com/Forums/banned).';
$LAN_CONFIGURATION_065 = 'SMF Table Prefix';
$LAN_CONFIGURATION_066 = 'The prefix of your SMF tables (normally smf_ by default).';
$LAN_CONFIGURATION_067 = 'SMF Super-User Group';
$LAN_CONFIGURATION_068 = 'Enter in the group ID that you wish to associate with that will have full access to this site.';
$LAN_CONFIGURATION_069 = 'SMF Ban Manger Group';
$LAN_CONFIGURATION_070 = 'Enter the group ID that you wish to associate with that will be able to access all bans.';
$LAN_CONFIGURATION_071 = 'SMF Admin Group';
$LAN_CONFIGURATION_072 = 'Enter the group ID that you wish to associate with that will be able to ban anyone without any restrictions.';
$LAN_CONFIGURATION_073 = 'SMF Member Group';
$LAN_CONFIGURATION_074 = "Enter the group ID that you wish to associate with that will be able to ban, but all bans greater than 1 hour will be placed in pending mode.  If the ban is not removed from pending mode after the number of days specified by \'days to keep pending banned\' then the ban will become inactive.";
$LAN_CONFIGURATION_075 = 'SMF No Power Group';
$LAN_CONFIGURATION_076 = 'Enter the group ID that you wish to associate with that will have no powers and will rely on admin group assignment powers.';
$LAN_CONFIGURATION_077 = 'Save Configuration';
$LAN_CONFIGURATION_078 = 'Note: Saving the configuration will also update GlobalBan.cfg on all active servers.';
$LAN_CONFIGURATION_079 = 'Access Denied.';
$LAN_CONFIGURATION_080 = "The file config/class.Config.php is not writable. Please check your web server's permissions before continuing.";
$LAN_CONFIGURATION_081 = '';
$LAN_CONFIGURATION_082 = 'Generate';
$LAN_CONFIGURATION_083 = 'Enable Web Link';
$LAN_CONFIGURATION_084 = 'This will add a menu item that will go to your community website.';
$LAN_CONFIGURATION_085 = 'Web Address';
$LAN_CONFIGURATION_086 = 'Enter in the URL of your web if you have enabled the web link. Ex: http://www.yourdomain.com';
$LAN_CONFIGURATION_087 = 'Enable HLstatsX Link';
$LAN_CONFIGURATION_088 = 'This will add a link per each Steam_ID at Ban List, that will search it in your HLstatsX Community Edition (http://www.hlxcommunity.com/).';
$LAN_CONFIGURATION_089 = 'HlstatsX Address';
$LAN_CONFIGURATION_090 = 'Enter in the URL of your HlstatsX web if you have enabled the HlstatsX link. Ex: http://www.yourdomain.com/HlstatsX/';
$LAN_CONFIGURATION_091 = 'Default Language';
$LAN_CONFIGURATION_092 = 'The language they were shown by default to all visitors that do not specify one. Will also be used in the messages that are sent to game server.';
$LAN_CONFIGURATION_093 = 'e107 Integration Settings';
$LAN_CONFIGURATION_094 = 'Enable e107 Auto New Post';
$LAN_CONFIGURATION_095 = 'If you have an e107 forum and want GlobalBan automatically create a new post in your forum e107 every time someone adds a new ban, select this option and set the rest of this section.';
$LAN_CONFIGURATION_096 = 'e107 Web Address';
$LAN_CONFIGURATION_097 = "Enter in the URL of your e107 web. Ex: \'http://www.your_e107_domain.com/\'";
$LAN_CONFIGURATION_098 = "e107 Database Host";
$LAN_CONFIGURATION_099 = "Set the e107 Database\'s host, normaly it\'s localhost.";
$LAN_CONFIGURATION_100 = "e107 Table Prefix";
$LAN_CONFIGURATION_101 = "The prefix of your e107 tables (normally \'e107_\' by default).";
$LAN_CONFIGURATION_102 = "Database Username";
$LAN_CONFIGURATION_103 = "MySQL user with access to the database used by e107.";
$LAN_CONFIGURATION_104 = "e107 Username";
$LAN_CONFIGURATION_105 = "e107 Registered User that we wish listed as author of the post GlobalBan generated. We introduce it using the format \'ID.Usuario\' for example \'5.Globalban\'.";
$LAN_CONFIGURATION_106 = "Database Password";
$LAN_CONFIGURATION_107 = "MySQL user´s Password to access e107 database.";
$LAN_CONFIGURATION_108 = "ID Category Forum";
$LAN_CONFIGURATION_109 = "For example if your Banned e107 Forum category link is \'http://www.youre107.com/e107_plugins/forum/forum_viewforum.php?19\' you must set it to \'19\'";
$LAN_CONFIGURATION_110 = "Database Name";
$LAN_CONFIGURATION_111 = "MySQL Database Name used by your e107 website.";
$LAN_CONFIGURATION_112 = 'Warrnings About Ex-Banned Player To';
$LAN_CONFIGURATION_113 = 'Allows you to select which players will be advised during the game when you connect a player who was banned temporarily by a ban already expired.';
$LAN_CONFIGURATION_114 = 'Every Player';
$LAN_CONFIGURATION_115 = 'Admins And Ex-Banned';
$LAN_CONFIGURATION_116 = 'Only Admins (Chat)';
$LAN_CONFIGURATION_117 = 'Only Ex-Banned (Panel)';
$LAN_CONFIGURATION_118 = 'Nobody';
$LAN_CONFIGURATION_119 = "English";
$LAN_CONFIGURATION_120 = "Spanish";
$LAN_CONFIGURATION_121 = "French";
$LAN_CONFIGURATION_122 = "Russian";
?>
