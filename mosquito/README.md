# Mosquito
Commonly used commands

### installations
```
sudo apt-get install mosquitto mosquitto-clients
brew install mosquitto
systemctl start mosquitto
mosquitto -v
```

### start/status
```
brew services start mosquitto
brew services status mosquitto
brew services list
```

### subscribe/publish
```
mosquitto_sub -t "dw/demo"
mosquitto_pub -t 'dw/demo' -m 'hello world!'
mosquitto_pub -d -t hello/world -m 'Hello from Terminal window 2!'

mosquitto_sub -d -t topic/sensor1 -h xxx.xxx.0.xxx
mosquitto_pub -d -t topic/sensor1 -m 'Hello and hello again!' -h xxx.xxx.0.xxx
```
