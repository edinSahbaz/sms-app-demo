using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace smsSenderClassLibrary
{
    public class sendSms
    {
        private int phoneNumber;
        private string messageContext;

        public sendSms(int num, string msg)
        {
            phoneNumber = num;
            messageContext = msg;

        }
    }
}
