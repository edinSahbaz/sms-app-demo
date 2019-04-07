namespace smsSenderClassLibrary
{
    public class smsElements
    {
        public string phoneNumber;
        public string messageContext;

        public void getSmsElements()
        {
            string number;
            string message;
            char specialChar = '~';
            string webFormData = System.IO.File.ReadAllText(@"C:\xampp\htdocs\Projekti\SendSMS\txt_sms\smscontext.txt");

            string[] elements = webFormData.Split(specialChar);
            message = elements[0];
            number = elements[1];
            
            phoneNumber = number;
            messageContext = message;
        }
    }
}
