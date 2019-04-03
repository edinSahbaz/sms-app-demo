using System;

namespace smsSenderClassLibrary
{
    public class smsElements
    {
        public int phoneNumber;
        public string messageContext;

        public void getSmsElements()
        {
            int number;
            string message;
            char specialChar = '~';
            string webFormData = System.IO.File.ReadAllText(@"C:\Users\Edin\Desktop\Code\C#\Prezentacija\SMS-sender-app\webForm\SendSMS\txt_sms\smscontext.txt");

            string[] elements = webFormData.Split(specialChar);
            message = elements[0];
            number = Convert.ToInt32(elements[1]);
            
            phoneNumber = number;
            messageContext = message;
        }
    }
}
