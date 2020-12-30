
# ------------------------------------------------------
#                           Primera opción 
# ------------------------------------------------------

# base image
# FROM node:12.2.0-alpine
 
# # set working directory
# WORKDIR /app/frontendvue
 
# # add `/app/node_modules/.bin` to $PATH
# ENV PATH /app/frontendvue/node_modules/.bin:$PATH
 
# # install and cache app dependencies
# # la agregué pq no copiaba mis datos
# COPY . /app/frontendvue 
# COPY package.json /app/frontendvue/package.json
# RUN npm install
# # RUN npm install @vue/cli@3.7.0 -g
# EXPOSE 8080
# # start app
# CMD ["npm", "run", "serve"]


# ------------------------------------------------------------------------------------

# FROM node:alpine
# WORKDIR /app/frontend

# COPY package*.json ./
# # COPY . .
# RUN npm install

# EXPOSE 8080
# CMD npm run serve

# base image ------------------------------------------------------------
# FROM node:12.2.0-alpine

# # set working directory
# WORKDIR /app

# # add `/app/node_modules/.bin` to $PATH
# ENV PATH /app/node_modules/.bin:$PATH

# # install and cache app dependencies
# COPY package.json /app/package.json
# RUN npm install
# RUN npm install @vue/cli@3.7.0 -g
# EXPOSE 8080
# # start app
# CMD ["npm", "run", "serve"]


# base image ---------------------------
# FROM node:12.2.0-alpine

# # set working directory
# WORKDIR /app

# ENV PATH /app/node_modules/.bin:$PATH

# COPY package.json /app/package.json
# RUN npm install
# RUN npm install @vue/cli@3.7.0 -g
# # start app
# CMD ["npm", "run", "serve"]


# -----------------

# FROM node:12.20.0 as ui-builder
# RUN mkdir /usr/src/app
# WORKDIR /usr/src/app
# #ENV PATH /usr/src/app/node_modules/.bin:$PATH
# COPY package.json /usr/src/app/package.json
# RUN npm install
# RUN npm install -g @vue/cli
# COPY . /usr/src/app
# RUN npm run build
# FROM nginx
# COPY  --from=ui-builder /usr/src/app/dist /usr/share/nginx/html
# EXPOSE 80
# CMD ["nginx", "-g", "daemon off;"]
#curl -i -X OPTIONS http://34.107.229.188/api/proyecto/datos-dominio


# ----------------------------
# http://heidloff.net/article/angular-react-vue-kubernetes
# -----------------------------
FROM nginx:latest
COPY nginx.conf /etc/nginx/conf.d/default.conf
COPY dist /usr/share/nginx/html