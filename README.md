# php-dev-env

Prerequisites ;
- Docker engine
- Docker-compose
- an IDE (preferaby with intelephense, prettier and live server extensions)
- Git
- (optionnal) Docker desktop => nice UI to manage containers

# Getting started

1/ Clone the repository locally using the command:

$ git clone https://github.com/GuillaumeFavrot/php-dev-env.git

2/ Since this is a developpement and test project only it is barebone and does not require a lot of setup. To launch the developpement environement use the command :

$ docker-compose up -d

the "-d" is optionnal but it allows the container to run in detached mode.

The app should now be acessible on either :
- http://localhost/index.php : without the path to index.php the request will lead to the nginx landing page. It's possible to replace index.php by any other ressource in the public folder.
- http://127.0.0.1/ : if hitting the loopback address nginx will by default serve the index.php file. To reach any other resource in the public folder the ressurce name should be specified in the URL.
- http://0.0.0.0 : This address acts like the loopback address.

# Database management

1/ PHPMyadmin

This container comes equiped with PHPMyadmin. This software is a web gui useful for accessing and managing a mySQL database.

The web portal is accessible on the loopback address on the port 8080.

To connect to the portal use your MySQL DB credentials. The 'server' field is optional.

# Troubleshooting

If nginx crash on launch, claiming the port 80 is already in use, either :
- kill any process using up the port (for exemple a local nginx server);
- Replace the first port in the nginx service definition (in docker-compose.yaml file) by any other port like 8080.

# Live updates (auto refresh)

In order to have the browser auto reload feature use the "live server" vscode extension.

To use it, install the extension on the browser (an icon shoud appear in the top right corner of the browser) then set it up by entering :
the actual server address : http://127.0.0.1/
and the live server address : http://localhost:550

In vscode (if the extension is installed) there should be a "go live" button. Click on it then a page will pop up. this page will display the project current folder structure. Naviguate to the public folder.

Then hit the loopback address in the browser and the page should automatically reload each time a public folder file is saved.
