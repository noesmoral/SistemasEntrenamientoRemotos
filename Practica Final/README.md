Instalar docker y docker compose
https://docs.docker.com/engine/installation/linux/ubuntulinux/
https://docs.docker.com/compose/install/

HACER LOS HTML EN views, angular en controllers y la api en apiFunctions.js

# Automatic start of nodes
To start all the services(nodejs, mysql)

`docker-compose up`

To start only a specific service

`docker-compose up "service"`

In both cases the daemon option can be used with the flag `-d`

# WebPage

It can be accessed with your browser through

`localhost:8080` if your are running the containers locally

or with `ip:8080` if the containers are running in other machine, with ip being the IP address of the containers' host machine


# MYSQL

Is the data base used to store the info

## Manual build and execution
`docker build -t mysqldb .`

`docker run -d -p 40000:8080 --link mysqlserv:mysqlserv --name nodeJS ubuntu-nodejs`

`mysql -h "127.0.0.1" -u "admin" "-padmin" "MySQLNode"`

# NODEJS

The nodeJS service is the one used to serve the webpage used to interact

## Manual build and execution

`docker build -t ubuntu-nodejs .`

`docker run -p 40000:8080 --name nodeJS ubuntu-nodejs`
