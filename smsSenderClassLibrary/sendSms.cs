using Twilio;
using Twilio.Types;
using Twilio.Rest.Api.V2010.Account;

namespace smsSenderClassLibrary
{
    public class sendSms
    {
        private string phoneNumber;
        private string messageContext;

        public sendSms(string num, string msg)
        {
            phoneNumber = "+" + num;
            messageContext = msg;

            const string accountSid = "AC6b28e18d8b7b1f4e3d859e2561c671fd";
            const string authToken = "777efac4f51660a312e161cbb9060798";

            TwilioClient.Init(accountSid, authToken);
            var from = new PhoneNumber("+18124965245");

            var message = MessageResource.Create(
                to: phoneNumber,
                from: from,
                body: messageContext);
        }
    }
}
