using System;
using System.Collections.Generic;
using System.Globalization;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Prezenty2020_SP
{
    class Repository
    {
        public List<Gift> GetAllFromFile(string fileName) {
            List<Gift> list = new List<Gift>();
            var result = File.ReadAllLines(fileName);
            foreach (string row in result) {
                var data = row.Split('|');
                list.Add(new Gift(){Name = data[0], Child = data[1], Price = Convert.ToDecimal(data[2],CultureInfo.InvariantCulture)});
            }
            return list;
        }
    }
}
