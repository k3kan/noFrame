docker install:
	docker build -t no-frame .
docker up:
	docker run --name cont-no-frame -d -p 81:80 --rm no-frame
docker stop:
	docker stop  cont-no-frame
