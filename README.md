# Chat System


## 🛠️ Installation
```bash
# installing docker
sudo apt update -y
sudo apt install git -y 
sudo apt install docker.io -y 
sudo systemctl start docker 
sudo systemctl enable docker 
sudo usermod -aG docker $USER 
sudo apt install docker-compose -y

# installing project
cd /opt
sudo git clone https://github.com/2120865/chat_system.git
cd chat_system
sudo chmod 777 upload
docker-compose up -d
```


## 🏃 Getting started
- Web App
    - http://127.0.0.1:81
- PhpMyAdmin
    - http://127.0.0.1:82 
- Database
    - mysql -h 127.0.0.1 -P 3307 -u root -p
