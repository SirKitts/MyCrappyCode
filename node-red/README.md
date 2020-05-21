# Traffic Lights - using MQTT, Raspberry Pi and Sensehat

Sample flow that shows how MQTT interact with Raspberry Pi Sensehat.
Uses a time delay that sets the payload by turning RED, YELLOW or GREEN lights ON.

```
msg.payload = {"red":"1","yellow":"0","green":"0","colour":"red"}
```

### Screenshots
![2019-06-08_23-18-00](https://github.com/SirKitts/node-red-contrib-flows-samples/blob/sample/aws-rekognition/pi-trafficlights/screenshots/flow-traffic-lights-with-mqtt-pi-sensehat.png)
