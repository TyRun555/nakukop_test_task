# TestApp (Symfony 5 + Docker)

## Desscription
Test app for getting and setting the settings from 3 abstract microservices (http, REST API, gRPC)

## Installation
1. Clone repo
2. Create .env file from docker/environment/local-dev/.env.dist and adjust USER_ID and GROUP_ID
   settings according to your current user (to make right permissions on files created from the containers)
3. You'll need the Make tool to run this project (Ubuntu `apt install make`) 
4. Run `make build` it will build and run docker containers and install dependencies (composer)
5. The app would be available on localhost:8000

**Look to the MakeFile for other useful commands**
 
## Usage
The app provides several API endpoints for getting or setting the settings of the microservices:

- GET|POST /api/services/http/settings
- GET|POST /api/services/restapi/settings
- GET|POST /api/services/grpc/settings

Response format **JSON**