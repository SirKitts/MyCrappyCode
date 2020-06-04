import groovy.json.JsonSlurper;
import groovy.json.JsonOutput;

class GroovyJson {
   static def ReadJson1() {
      def stringObject = '{ "name": "Helen", "ID" : "1"}';
      def jsonSlurper = new JsonSlurper();
      def object = jsonSlurper.parseText(stringObject);
		
      println(object.name);
      println(object.ID);
   }
   
   static def ReadJson2() {
      def intlist = '{ "List": [2, 3, 4, 5] }';
      def jsonSlurper = new JsonSlurper();
      Object lst = jsonSlurper.parseText(intlist);
      lst.each { println it }
   }

   static def ReadJson3() {
      def objlist = '{"Integer": 12, "fraction": 12.55, "double": 12e13}';
      def jsonSlurper = new JsonSlurper();
      def obj = jsonSlurper.parseText(objlist);
		
      println(obj.Integer);
      println(obj.fraction);
      println(obj.double); 
   }

   static def ReadJsonFromUrl() {
      def connection = new URL( "https://api.covid19api.com/")
        .openConnection() as HttpURLConnection

      connection.setRequestProperty( 'Accept', 'application/json' )

      // get the response code - automatically sends the request
      println connection.inputStream.text
   }

   static def WriteJson() {
      def output = JsonOutput.toJson([ new Player(name: 'Helen',ID:1),
         new Player(name: 'Troy',ID:2)])
      println(output); 
   }

   static void main(String[] args) {
      GroovyJson groovyjson = new GroovyJson();

      // groovyjson.ReadJson1();
      // groovyjson.ReadJson2();
      // groovyjson.ReadJson3();
      groovyjson.ReadJsonFromUrl();
      // groovyjson.WriteJson();
   }
}

class Player {
   String name
   int ID; 
}
