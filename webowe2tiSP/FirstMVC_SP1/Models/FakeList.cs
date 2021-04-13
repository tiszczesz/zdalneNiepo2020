using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace FirstMVC_SP1.Models
{
    public class FakeList
    {
        public static List<Person> List() {
            return new List<Person>() {
                new Person{Id=1,FirstName = "Antoni",LastName = "Trocki",Email = "ff@gmail.com"},
                new Person{ Id=2,FirstName = "Monika",LastName = "Trocka",Email = "ff@gmail.com"},
                new Person{ Id=3,FirstName = "Tomasz",LastName = "Bomasz",Email = "ff@gmail.com"},
            };
        }
    }
}
