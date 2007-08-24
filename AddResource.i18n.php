<?php
$allMessages = array(
        'en' => array(
		'addresource_title' => 'AddResource',
		'add_resource' => 'AddResource', /* this is a) link text in Special:Specialpages and b) title on the view of the special page */
		'noParameterHelp' => '= Special:AddResource: No pagename specified =
Please append the Page you want to add a resource to, i.e. {{FULLPAGENAME}}/Pagename.',
		'header' => '= Add a resource for $1 =',
		'article_not_exists' => '<h3>Warning!</h3>
The page "$1" doesn\'t exist yet. You can still add files and links, but no subpages (for technical reasons). You may want to $2 first',
		'explanation' => 'This page allows you to add resources to [[$1]]. You can add three different types of resources: files, subpages and links. The resources you add here are automatically added to the Download-tab of the page.',
		'upload_header' => '== Add a file ==',
		'upload_exp' => 'You can upload a file directly. Use this method if you want to add something like a pdf, a png/jpg or a doc/odt-file.',
		'upload_footer' => 'Please consider converting your files to a [http://en.wikipedia.org/wiki/Free_file_format free file format] before uploading it. This is of course not mandatory but still a nice thing to do ;-).',
		'upload_pretext' => 'For now, please use the usual upload page: ',
		'upload_page' => 'Special:Upload',
		'upload_linktext' => 'Upload a new file',
		'subpage_header' => '== Add a subpage ==',
		'subpage_exp' => 'If you want to develop a resource directly in this wiki, you should add a subpage. Enter a \'\'meaningful\'\' title in the input field below and click "$1".',
		'subpage_button' => 'Create subpage',
		'subpage_after_exp' => 'Please note that if the subpage already exists, you will simply be redirected to that page.',
		'link_header' => '== Add a link ==',
		'link_exp' => 'If you can\'t upload a file or page directly here, you can also add an external link. Please enter a $1 and a short but descriptive $2 and click "$3".',
		'link_url' => 'full URL',
		'link_title' => 'link text',
		'link_title_exists' => 'A link/subpage with that name already exists. You can either try a new title or $1 the existing link/subpage. A list of existing subpages is available $2.',
		'link_title_exists_1' => 'edit',
		'link_title_exists_2' => 'here',
		'link_button' => 'Add a new Link',
		'link_footer' => 'This will create a new "external redirect", the pagename will be <i>$1/link text</i>. So an external redirect is just a subpage with some special properties and as such might collide with other subpages. A list of subpages can be found $2.',
		'link_footer_linktext' => 'here',
		'link_created' => 'New external redirect added. You can $1 it, $2 it or $3 there right away.',
		'link_created_view' => 'view',
		'link_created_edit' => 'edit',
		'link_created_gothere' => 'go there',
		'commit_message' => 'new external link to $1',
		'resources_page' => 'Special:Resources',
		'forgot_url' => 'Please enter a URL',
		'forgot_title' => 'Please enter a link-text',
	),
	'de' => array(
		'addresource_title' => 'Materialien_Hinzufügen',
		'materialien_hinzufügen' => 'Materialien Hinzufügen', /* this is a) link text in Special:Specialpages and b) title on the view of the special page */
		'noParameterHelp' => '= Spezial:Materialien Hinzufügen: Kein Artikelname angegeben! =
Bitte gib die Seite, zu der du Materialien hinzufügen willst, als Parameter in der URL an, z.B. {{FULLPAGENAME}}/Artikelname',
		'header' => '= Materialien für $1 hinzufügen =',
		'article_not_exists' => '<h3>Warnung!</h3>
Die Seite $1 existiert noch nicht. Du kannst trotzdem Dateien und Links hinzufügen, aus technischen Gründen können aber keine Unterseiten hinzugefügt werden.',
		'explanation' => 'Mit dieser Seite kannst du Materialien zu [[$1]] hinzufügen. Es gibt drei verschiedene Arten von Materialien: Dateien, Unterseiten und Links. Die Materialien die du hier hinzufügst werden automatisch auf der [[Spezial:Materialien/$1|Materialien]]-Seite angezeigt.',
		'upload_header' => '== Datei hinzufügen ==',
		'upload_exp' => 'Du kannst Dateien direkt hochladen. Verwende diese Funktion wenn du z.B. eine pdf, ein png/jpg oder eine doc/odt hinzufügen willst.',
		'upload_footer' => 'Bitte versuche deine Dateien in ein [http://de.wikipedia.org/wiki/Freies_Dateiformat freies Dateiformat] zu konvertieren, bevor du sie hochlädst. Die Konvertierung ist nicht verpflichtend aber es wäre trotzdem nett wenn du es tust :-).',
		'upload_pretext' => 'Verwende einstweilen die normale Hochladen-Seite: ',
		'upload_page' => 'Spezial:Hochladen',
		'upload_linktext' => 'Neue Datei hochladen',
		'subpage_header' => '== Unterseite hinzufügen ==',
		'subpage_exp' => 'Wenn du Materialien in diesem Wiki entwickeln willst, kannst du eine Unterseite anlegen. Gib einen \'\'sinnvollen\'\' Titel in die Eingabebox ein und klicke $1.',
		'subpage_button' => 'Unterseite anlegen',
		'subpage_after_exp' => '\'\'\'Anmerkung:\'\'\' Wenn eine Unterseite bereits existiert, wirst du einfach auf diese Seite weitergeleitet.',
		'link_header' => '== Link hinzufügen ==',
		'link_exp' => 'Wenn du Materialien nicht direkt hier hochladen kannst, kannst du auch einen externen Link hinzufügen. Gib ein $1 und einen kurzen eindeutigen $2 ein und klicke $3.',
		'link_url' => 'URL',
		'link_title' => 'Titel',
		'link_title_exists' => 'Ein Link/eine Unterseite mit diesem Namen existiert bereits. Du kannst entweder einen neuen Titel eingeben oder die bestehende Seite $1. Eine Liste aller Subpages findest du unter $2.',
		'link_title_exists_1' => 'editieren',
		'link_title_exists_2' => 'hier',
		'link_button' => 'Link hinzufügen',
		'link_footer' => 'Hiermit legst du eine "externe Weiterleitung" an. Der Seitenname ist <i>$1/Titel</i>. Eine exterene Weiterleitung ist also eigentlich eine normale Unterseite mit speziellen Eigenschaften und kann also auch mit anderen Unterseiten "kollidieren". Eine Liste von Unterseiten kann $2 anschaun.',
		'link_footer_linktext' => 'hier',
		'link_created' => 'Neue externe Weiterleitung angelegt. Du kannst ihn $1, $2 oder gleich $3 gehen.',
		'link_created_view' => 'anschaun',
		'link_created_edit' => 'editieren',
		'link_created_gothere' => 'dorthin',
		'commit_message' => 'neuer externer link zu $1.',
		'resources_page' => 'Spezial:Materialien',
		'forgot_url' => 'Bitte URL eingeben.',
		'forgot_title' => 'Bitte Titel eingeben.',
	)
);
?>
