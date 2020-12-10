using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace CoreRazarPagesModel_sp.Models
{
    public class Film
    {
        public string Title { get;  set; }
        public int Length { get; set; }
        public string Director { get; set; }
        public DateTime Data { get; set; }
    }
}
