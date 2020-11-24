[Gotify - PHP webclient]
-----------------------------------------------------------------------------------------
One of our customers asked Glasswall to find a privacy friendly way to push messages to 
android phones without the use of google services, whatsapp or telegram.
For this purpose we have recomended the customer to use Gotify for messasge pushing.
Gotify is open source software and can be deployed on own servers.
The customer asked Glasswall if we could provide a webbased client and we provided the 
customer with this PHP webclient.
Because Glasswall propagates the open source mentality we decided to share this code as
open source under the GPLv3. Have phun ;) 
-----------------------------------------------------------------------------------------
This client is created to use one single interface to send to one or multiple application 
with the token of one or multiple clients that could resists within multiple users.
Setup is fairly simple:
- extract files in your php enables webserver location.
- configurate the configfile in the webroot. (host and port of the gotify server, tokens)
- done
-----------------------------------------------------------------------------------------
First coding done by : Jan van de Rijt for Glasswall B.V.

v0.1 (31-03-2020) [Jan van de Rijt]
- connect to gotify server.
- send message with single client token.

v0.2 (31-03-2020) [Jan van de Rijt]
- send with multiple app tokens.

v0.5 (01-04-2020) [Jan van de Rijt]
- send with multiple client tokens.
- enhanced the interface layout (multi background and css).
- all background images are CC0 licence (piqsels.com).

v1.0 (01-04-2020) [Jan van de Rijt]
- corrected html protocol.
- added metadata.
- added input validation.
- created a config.php for system variables.

v1.1 (02-04-2020) [Jan van de Rijt]
- added input validadion on gotify server app token request.

v1.5 (03-04-2020) [Jan van de Rijt]
- added [user:password] login (multi user possible).
- some enhancements due android scaling and small resolution.
- user:password is an option you can disable.

v1.6 (03-04-2020) [Jan van de Rijt]
- some layout tweaks on errors.
- made html code w3c complient.
-----------------------------------------------------------------------------------------
