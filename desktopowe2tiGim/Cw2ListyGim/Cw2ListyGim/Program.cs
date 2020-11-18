using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.Remoting.Messaging;
using System.Text;
using System.Threading.Tasks;

namespace Cw2ListyGim
{
    class Program
    {
        static void Main(string[] args) {
            SetOfDocuments dokumenty = new SetOfDocuments();
            Console.WriteLine(dokumenty.GetInfo());
            dokumenty.AddNewDocument(new Document("najswiezszy dokument"));
            dokumenty.AddNewDocument(new Document("bbb"));
            dokumenty.AddNewDocument(new Document("ccc"));
            try {
                Console.WriteLine(dokumenty.Documents[3]);
            }
            catch (ArgumentOutOfRangeException ex) {
                Console.WriteLine(ex.Message);
            }
            
            Console.WriteLine(" =========================================== ");
            Console.WriteLine(dokumenty.GetInfo());

            Console.WriteLine(" ==========WSTAWIANMI DO SRODKA LISTY============= ");
            dokumenty.Documents.Insert(3,new Document("Nowo wstawiony dokument"));
            Console.WriteLine(dokumenty.GetInfo());
            Console.ReadKey();
        }
    }
 
}
