version: '3.8'
services:
  app:
    build: .
    ports:
      - "80:80"
    depends_on:
      - db
    environment:
      DB_HOST: db
      DB_USER: driptee_user
      DB_PASSWORD: ${DB_PASSWORD:-UserPassword456!}
      DB_NAME: driptee_db
    volumes:
      - .:/var/www/html

  db:
    image: mysql:5.7
    restart: always
    environment:
      MYSQL_ROOT_PASSWORD: ${MYSQL_ROOT_PASSWORD:-SecurePassword123!}
      MYSQL_DATABASE: driptee_db
      MYSQL_USER: driptee_user
      MYSQL_PASSWORD: ${DB_PASSWORD:-UserPassword456!}
    volumes:
      - ./driptee_db.sql:/docker-entrypoint-initdb.d/driptee_db.sql
      - db_data:/var/lib/mysql

volumes:
  db_data:
