# Chat System


## 🛠️ Installation
```bash
# installing docker
sudo apt update -y && \
sudo apt install git -y && \
sudo apt install docker.io -y && \
sudo systemctl start docker && \
sudo systemctl enable docker && \
sudo usermod -aG docker $USER && \
sudo apt install docker-compose -y

# installing project
cd /opt && \
sudo git clone … && \
cd chat_system && \
docker-compose up -d
```


## 🏃 Getting started
- Web App
    - http://127.0.0.1:81
- PhpMyAdmin
    - http://127.0.0.1:82 
- Database
    - mysql -h 127.0.0.1 -P 3307 -u root -p
