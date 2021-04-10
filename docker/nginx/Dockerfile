FROM nginx:1.17.8

ARG USER_ID
ARG GROUP_ID
RUN groupadd -g "$GROUP_ID" pilulka
RUN useradd -l -u "${USER_ID}" -g pilulka pilulka

WORKDIR /var/www
