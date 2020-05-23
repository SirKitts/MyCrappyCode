class HelloWorld {
   int x = 100; 
   int y = 100; 
	
   public int getX() { 
      this.x = 200; 
      return x; 
   }

   public int getY() {
      this.y = 200;
      return y;
   }

   static void sum(int a,int b) {
      int c = a+b;
      println(c);
   }

   static def DisplayName() {
      println("This is how methods work in groovy");
      println("This is an example of a simple method");
   }

   static void main(String[] args) {
      println('Hello World');

      def range = 5..10; 
      println(range); 
      println(range.get(2));

      DisplayName();
      sum(1,1);
      println(getY());
      
      HelloWorld ex = new HelloWorld(); 
      println(ex.getX());
   }
}
