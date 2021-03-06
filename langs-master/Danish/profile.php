<?php

// Language definitions used in profile.php
$lang_profile = array(

// Navigation and sections
'Profile menu'					=>	'Profil menu',
'Section essentials'			=>	'Det vigtigste',
'Section personal'				=>	'Personligt',
'Section messaging'				=>	'Beskeder',
'Section personality'			=>	'Personlighed',
'Section display'				=>	'Vis',
'Section privacy'				=>	'Privat',
'Section admin'					=>	'Administration',

// Miscellaneous
'Username and pass legend'		=>	'Indtast din brugernavn og adgangskode',
'Personal details legend'		=>	'Indtast dine personlige detaljer',
'Contact details legend'		=>	'Indtast dine besked detaljer',
'User activity'					=>	'Bruger aktivitet',
'Paginate info'					=>	'Indtast antallet af emner og indlæg du ønsker at se pr. side.',

// Password stuff
'Pass key bad'					=>	'Denne adgangskode aktiveringsnøgle er forkert er for gammel. Prøv at anmod om en ny nøgle. Hvis dette heller ikke hjælper, så kontakt forummets administrator på ',
'Pass updated'					=>	'Din adganskode er blevet opdateret. Du kan nu logge ind med din nye adgangskode.',
'Pass updated redirect'			=>	'Adgangskode opdateret. Omdirigerer …',
'Wrong pass'					=>	'Forkert gammel adgangskode.',
'Change pass'					=>	'Skift adgangskode',
'Change pass legend'			=>	'Indtast og bekræft din nye adgangskode',
'Old pass'						=>	'Gammel adgangskode',
'New pass'						=>	'Ny adgangskode',
'Confirm new pass'				=>	'Bekræft ny adgangskode',
'Pass info'						=>	'Adgangskoder skal være mindst 4 tegn lange. Adgangskoder skelner mellem store og små bogstaver.',

// Email stuff
'Email key bad'					=>	'The specified email activation key was incorrect or has expired. Please re-request change of email address. If that fails, contact the forum administrator at',
'Email updated'					=>	'Your email address has been updated.',
'Activate email sent'			=>	'An email has been sent to the specified address with instructions on how to activate the new email address. If it doesn\'t arrive you can contact the forum administrator at',
'Email legend'					=>	'Enter your new email address',
'Email instructions'			=>	'An email will be sent to your new address with an activation link. You must click the link in the email you receive to activate the new address.',
'Change email'					=>	'Change email address',
'New email'						=>	'New email',

// Avatar upload stuff
'Avatars disabled'				=>	'Administratoren har deaktiveret profilbillede understøttelse.',
'Too large ini'					=>	'Den valgte fil var for stor til at blive uploaded. Serveren kunne ikke tillade dette upload.',
'Partial upload'				=>	'Den valgte file var kun delvist uploadet. Prøv igen.',
'No tmp directory'				=>	'PHP var ikke i stand til at kunne gemme den uploadede fil til en midlertidig lokation.',
'No file'						=>	'Du valgte ikke en fil til upload.',
'Bad type'						=>	'Filen du prøvede på at uploade er ikke en tilladt filtype. Tilladte filtyper er gif, jpeg og png.',
'Too wide or high'				=>	'Filen du prøvede at uploade er bredere og/eller højere hvad der maksimalt er tilladt',
'Too large'						=>	'Filen du prøvede at uploade er større end hvad der maksimalt er tilladt',
'pixels'						=>	'pixels',
'bytes'							=>	'bytes',
'Move failed'					=>	'Serveren var ikke i stand til at gemme den uploadede fil. Kontakt venligst administratoren på',
'Unknown failure'				=>	'Der er opstået en ukendt fejl. Prøv igen.',
'Avatar upload redirect'		=>	'Profilbillede uploadet. Omdirigerer …',
'Avatar deleted redirect'		=>	'Profilbillede slettet. Omdirigerer …',
'Avatar desc'					=>	'Et profilbillede er et lille billede som vil blive vist under dit brugernavn i dine indlæg. Det må ikke være større end',
'Upload avatar'					=>	'Upload profilbillede',
'Upload avatar legend'			=>	'Indtast et profilbillede til upload',
'Delete avatar'					=>	'Slet profilbillede', // only for admins
'File'							=>	'Fil',
'Upload'						=>	'Upload', // submit button

// Form validation stuff
'Forbidden title'				=>	'Titlen du har indtastet indeholder et forbudt ord. Du bliver nødt til at vælge en anden titel.',
'Profile redirect'				=>	'Profil opdateret. Omdirigerer …',

// Profile display stuff
'Users profile'					=>	'%s\s profil ',
'Username info'					=>	'Brugernavn: %s',
'Email info'					=>	'Email: %s',
'Posts info'					=>	'Indlæg: %s',
'Registered info'				=>	'Registreret: %s',
'Last post info'				=>	'Sidste indlæg: %s',
'Last visit info'				=>	'Sidste besøg: %s',
'Show posts'					=>	'Vis alle indlæg',
'Show topics'					=>	'Vis alle emner',
'Show subscriptions'			=>	'Vis alle abonnementer',
'Realname'						=>	'Rigtige navn',
'Location'						=>	'Lokation',
'Website'						=>	'Webside',
'Invalid website URL'			=>	'Denne webside URL du har indtaste er ugyldig.',
'Website not allowed'			=>	'Du har ikke tilladelse til at tilføje en webside til din profil endnu.',
'Jabber'						=>	'Jabber',
'ICQ'							=>	'ICQ',
'MSN'							=>	'MSN Messenger',
'AOL IM'						=>	'AOL IM',
'Yahoo'							=>	'Yahoo! Messenger',
'Avatar'						=>	'Profilbillede',
'Signature'						=>	'Signatur',
'Sig max size'					=>	'Maksimal længde: %s tegn / Maksimum linier: %s',
'Avatar legend'					=>	'Sæt dine profilbillede visnings indstilliger',
'Avatar info'					=>	'Et profilbillede er et lille billede som vil blive vist i alle dine indlæg. Du kan uploade et profilbillede ved at klikke på linket herunder.',
'Change avatar'					=>	'Skift profilbillede',
'Signature legend'				=>	'Skriv din signatur',
'Signature info'				=>	'En signatur er et lille stykke tekst som er vedlagt til dine indlæg. I signaturen kan du skrive næsten alt hvad du har lyst til. Måske dit favorit citat eller lignende, det er op til dig! I signaturen kan du bruge BB koder hvis det er tilladt i dette specifikke forum. Du kan se hvilke funktioner der er tilladt når du redigerer signaturen.',
'Sig preview'					=>	'Nuværende signatur forhåndsvist:',
'No sig'						=>	'Ingen signatur er gemt på din profil nu.',
'Signature quote/code/list/h'	=>	'Citatet, koden listen and at skrive BB koder er ikke tilladt i signaturer.',
'Topics per page'				=>	'Emner',
'Posts per page'				=>	'Opslag',
'Leave blank'					=>	'Lad være tom for at brug forummets standard.',
'Subscription legend'			=>	'Sæt dine abonnerings indstillinger',
'Notify full'					=>	'Inkluder en ren tekst version af nye indlæg i abonnement notificationen på email.',
'Auto notify full'				=>	'Abonnér automatisk på hvert emne jeg lægger oplæg i',
'Show smilies'					=>	'Vis smilies som grafiske ikoner',
'Show images'					=>	'Vis billeder i indlæg',
'Show images sigs'				=>	'Vis billeder i brugersignaturer.',
'Show avatars'					=>	'Vis brugeres profilbilleder i indlæg',
'Show sigs'						=>	'Vis brugeres signaturer',
'Style legend'					=>	'Vælg din fortrukne stil',
'Styles'						=>	'Stile',
'Admin note'					=>	'Administrator bemærkning',
'Pagination legend'				=>	'Indtast dine sidetals indtillinger',
'Post display legend'			=>	'Sæt din indstillinger for at vise indlæg',
'Post display info'				=>	'Hvis du har en langsom internetforbindelse vil siden være hurtigere hvis deaktiverer disse muligheder, specielt visningen af billeder og signaturer.',
'Instructions'					=>	'Når du opdaterer din profil vil du blive omdiregeret tilbage til denne side.',

// Administration stuff
'Group membership legend'		=>	'Vælg bruger gruppe',
'Save'							=>	'Gem',
'Set mods legend'				=>	'Sæt moderator adgang',
'Moderator in info'				=>	'Vælg hvilke fora denne bruger skal have lov til at moderére. Bemærk: dette gælder kun moderatorer. Administratorer har altid fuld adgang til alle fora.',
'Update forums'					=>	'Updatér fora',
'Delete ban legend'				=>	'slet (kun administratorer) eller ban brugeren',
'Delete user'					=>	'Slet bruger',
'Delete spammer'			=>	'Delete user &amp; report spam',
'Delete spammer note'		=>	'After deletion this user will be reported as a spammer. This is intended for reporting spam bots, <strong>not</strong> annoying users!',
'Spammer delete redirect'	=>	'User deleted and reported. Redirecting &hellip;',
'Ban user'						=>	'Ban bruger',
'Confirm delete legend'			=>	'Vigtigt: læs før du sletter bruger',
'Confirm delete user'			=>	'Bekræft sletning af bruger',
'Confirmation info'				=>	'Bekræft venligst at du vil slette denne bruger', // the username will be appended to this string
'Delete warning'				=>	'Advarsel! Slettede brugere og/eller indlæg kan ikke blive genskabt. Hivs du vælger ikke at slette indlæggene lavet af denne bruger kan de kun blive slettet manuelt på et senere tidspunkt.',
'Delete posts'					=>	'Slet alle indlæg og emner denne bruger har lavet.',
'Delete'						=>	'Slet', // submit button (confirm user delete)
'User delete redirect'			=>	'Bruger slettet. Omdirigerer …',
'Group membership redirect'		=>	'Gruppe medlemskab gemt. Omdirigerer …',
'Update forums redirect'		=>	'Forum moderator rettigheder opdateret. Omdirigerer …',
'Ban redirect'					=>	'Omdirigerer …',
'No delete admin message'		=>	'Administratore kan ikke blive slettet. For at slette denne bruger skal du først flytte personen til en anden brugergruppe.',

);
