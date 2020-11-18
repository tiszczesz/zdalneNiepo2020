using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Cw2ListyGim
{
    class Document
    {
        public string Name { get; set; }

        public Document() {
            Name = "noname";
        }

        public Document(string name) {
            Name = name;
        }

        public override string ToString() {
            return $"Dokument o nazwie: {Name}";
        }
    }
}
