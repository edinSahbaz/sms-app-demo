using System;
using smsSenderClassLibrary;

namespace smsSender
{
    class Program
    {
        public static string msgLocation = @"C:\xampp\htdocs\Projekti\SendSMS\txt_sms\smscontext.txt";

        static void Main(string[] args)
        {
            headerInfo();

            trySendSMS: 
            if (System.IO.File.ReadAllText(msgLocation) != "") 
            {
                sendSms();
                System.IO.File.WriteAllText(msgLocation, "");
                goto trySendSMS;
            }
            else
            {
                Console.BackgroundColor = ConsoleColor.Black;
                Console.WriteLine(string.Format("{0:HH:mm:ss}", DateTime.Now) + " " + "No messages incoming...");
                System.Threading.Thread.Sleep(1000);
                goto trySendSMS;
            }
        }

        #region Methods
        static void headerInfo()
        {
            Console.WriteLine("SMS sender data manager console UI v1.0");
            Console.WriteLine("---------------------------------------");
            Console.WriteLine();
        }

        static void sendSms()
        {
            Console.BackgroundColor = ConsoleColor.DarkRed;
            Console.WriteLine("Getting SMS data...");
            smsElements smsEl = new smsElements();
            smsEl.getSmsElements();

            Console.WriteLine("Sending SMS...");
            sendSms smsSend = new sendSms(smsEl.phoneNumber, smsEl.messageContext);

            Console.WriteLine("Message sent to:" + smsEl.phoneNumber);
        }
        #endregion
    }
}
