// To stop / remove all docker images:
docker rm $(docker kill $(docker ps -a -q))
// To shell into the container:
docker exec -ti {{containername}} /bin/sh
// To run a command from docker compose
docker-compose run -rm {{containername}} /bin/sh
// list all docker images
docker images
// List all running images
docker ps -a
// Remove image
docker rm {{imagename}}
// Remove container
docker rmi {{sha256blahblah}}
// remove all images
docker rmi $(docker images -q)
// remove all running containers
docker rm $(docker ps -a -q)
// remove all volumes
docker volume rm $(docker volume ls -q)
// remove all volumes that are <none>
docker rmi $(docker images -q --filter "dangling=true")
// build from a dockerfile
docker build - < local.golang.orig
