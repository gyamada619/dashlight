#Dashlight
This is a web-based dashboard for WeMo lights. 

You can install it using npm:

  <code>npm install dashlight</code>
  
The repository and npm package include a first-time setup script. Make it executable like this:

  <code>sudo chmod +x WeMo_Panel_Setup.sh</code>
  
Then run it (the script requires sudo to install the dependencies):

  <code>sudo ./WeMo_Panel_Setup.sh</code>
  
The script will prompt you for the number of WeMo devices and their IP addresses, and create PHP scripts to turn them on and off.

<img src="http://i.imgbox.com/dmADScP4.png"/>

The libraries used in this project are courtesy of Thorne Melcher (GitHub: [ExistentialEnso](https://github.com/ExistentialEnso)), and are licensed under LGPL v3. 


