using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;

namespace WebMVC_DB2_sp.Models
{
    public class Animal
    {
        [Key] 
        public int Id { get; set; }

        public string Name { get; set; }

        public int Weight { get; set; }
    }
}
