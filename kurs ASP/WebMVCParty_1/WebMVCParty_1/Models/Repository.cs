using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace WebMVCParty_1.Models
{
    public static class Repository {
        private static List<GuestResponse> responses =
            new List<GuestResponse>() {
                new GuestResponse(){Name = "Antoni",Email = "fff@ggg.pl",WillAttend = true,Phone = "34444"},
                new GuestResponse(){Name = "Marynia",Email = "y@ggg.pl",WillAttend = true,Phone = "34444"},
                new GuestResponse(){Name = "Roman",Email = "t@ggg.pl",WillAttend = false,Phone = "34444"},
                new GuestResponse(){Name = "Józef",Email = "mssss@ggg.pl",WillAttend = true,Phone = "34444"},
            };

        public static IEnumerable<GuestResponse> Responses => responses;

        //public static IEnumerable<GuestResponse> Responses {
        //    get { return responses; }
        //}
        public static void AddResponse(GuestResponse response) {
            responses.Add(response);
        }
    }
}
