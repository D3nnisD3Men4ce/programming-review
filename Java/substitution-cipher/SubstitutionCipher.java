import javax.swing.JOptionPane;

public class SubstitutionCipher 
{

   static final int MAX = 26;
   protected char[] encoder;
   protected char[] decoder;
  

   public SubstitutionCipher() 
   {
       this.encoder = new char[MAX];
       this.decoder = new char[MAX];
   }
  

   public void setKey (String KeyString) 
   {
       this.encoder = KeyString.toCharArray();
      
       for (int i = 0; i < MAX; i++) 
       {
           char ch = (char)('A' + i);
           int pos = KeyString.indexOf(ch);
           if (pos == -1 || KeyString.length() > MAX) 
           {
               System.out.println("Invalid Input. Please make sure there are exactly 26 non-repeating uppercase characters.");
               System.exit(1);
           }
           this.decoder[i] = (char)('A' + pos);
       }
   } 


  public String encrypt(String message) { return transform(message, this.encoder); }
  public String decrypt(String secret) { return transform(secret, this.decoder); }
  

  private String transform(String original, char[] code) 
  {
      char[] msg = original.toCharArray();
      for (int k = 0; k < msg.length; k++)
          if (Character.isUpperCase(msg[k]))
          { 
              int j = msg[k] - 'A';
              msg[k] = code[j];
          }
      return new String(msg);
  }


   public static void main(String[] args) 
   {
      
       String KeyString = "ABCAEFGHIJKLMNOPQRSTUVWXYZ"; //FJORDBANKGLYPHSVEXTCWMQUIZ
       SubstitutionCipher subCipher = new SubstitutionCipher();
       subCipher.setKey(KeyString);

        String ask = JOptionPane.showInputDialog(null, "Do you want to Encrypt or Decrypt a message?\n(1) Encrypt\n(2) Decrypt", JOptionPane.PLAIN_MESSAGE);
        int resp = Integer.parseInt(ask);
        
        switch(resp)
            {
            case 1:
                String message = JOptionPane.showInputDialog("Encrypt a message: ");
                String coded = subCipher.encrypt(message);
                System.out.println("Secret: " + coded);
                JOptionPane.showMessageDialog(null, "The encrypted message is: " + coded, "Substitution Cipher", JOptionPane.PLAIN_MESSAGE);
                break;

            case 2:
                String message2 = JOptionPane.showInputDialog("Decrypt a message: ");
                String answer = subCipher.decrypt(message2);
                System.out.println("Message: " + answer);
                JOptionPane.showMessageDialog(null, "The decrypted message is: " + answer, "Substitution Cipher", JOptionPane.PLAIN_MESSAGE);
                break;
            }
   }
}
   