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
                new Person{FirstName = "Antoni",LastName = "Trocki",Email = "ff@gmail.com"},
                new Person{FirstName = "Monika",LastName = "Trocka",Email = "ff@gmail.com"},
                new Person{FirstName = "Tomasz",LastName = "Bomasz",Email = "ff@gmail.com"},
            };
        }
    }
}
