using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace KursWebMVC_1.Models
{
    public class Photo
    {
        public int PhotoID { get; set; }
        public string Title { get; set; }
        public string PhotoFileName { get; set; }

        public string Description { get; set; }

        public DateTime CreateDate { get; set; }

        public string ImageMimeType { get; set; }
    }
}
