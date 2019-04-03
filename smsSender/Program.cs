using smsSenderClassLibrary;
using System;

namespace smsSender
{
    class Program
    {
        static void Main(string[] args)
        {
            //gets SMS elements(phone number and message)
            smsElements smsEl = new smsElements();
            smsEl.getSmsElements();

            //sending SMS
            sendSms smsSend = new sendSms(smsEl.phoneNumber, smsEl.messageContext);

            //success feedback


            Console.ReadKey();
        }
    }
}
