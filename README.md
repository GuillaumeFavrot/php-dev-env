# php-dev-env

Prerequisite
- Docker engine
- Docker-compose
- an IDE (preferaby with intellephense, prettier and live server extenssions)
- Git
- (optionnal) Docker desktop => nice ui to manage containers

# Getting started

1/ Clone the repository locally using the command:

$ git clone https://github.com/GuillaumeFavrot/php-dev-env.git

2/ Since this reposirtory is for developpement and test purposes only there is not a lot of setup. >To launch the developpement environement use the command :

$ docker-compose up -d

the "-d" is optionnal but is allows to container to run in detached mode.

The app should now be acessible on either :
- http://localhost/index.php (without the path to index.php the request will lead to the nginx landing page)
- http://127.0.0.1/ if hitting this loopback address nginx will by default serve the index.php file. To reach any other resource in the public folder the ressurce name should be added.
- http://0.0.0.0 This address act like the loopback address.

# Troubleshooting

If nginx crash on launch claiming the port 80 is already in use either :
- kill any process using up the port (for exemple a local nginx server);
- use any other port like 8080.

# Live updates (auto refresh)

In order to have the browser auto reload feature use the "live server" vscode extension.

To use it install the extension on the browser the set it up by entering :
the actual server address : http://127.0.0.1/
and the live server address : http://localhost:5500

On vscode on the bottom blue toolbar click on "go live" then a page will pop up. this page will display the project current folder structure. Naviguate to the public folder.

Then the page should reload each time a public folder file is saved