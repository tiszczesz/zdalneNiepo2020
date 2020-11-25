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
          // Ex1();
          Ex2();
            Console.ReadKey();
        }

        public static void Ex1() {
            SetOfDocuments dokumenty = new SetOfDocuments();
            Console.WriteLine(dokumenty.GetInfo());
            dokumenty.AddNewDocument(new Document("najswiezszy dokument"));
            dokumenty.AddNewDocument(new Document("bbb"));
            dokumenty.AddNewDocument(new Document("ccc"));
            try
            {
                int index = GetDocument(dokumenty.Documents);
                Console.WriteLine(dokumenty.Documents[index]);
            }
            catch (ArgumentOutOfRangeException ex)
            {
                Console.WriteLine(ex.Message);
            }

            Console.WriteLine(" =========================================== ");
            Console.WriteLine(dokumenty.GetInfo());

            Console.WriteLine(" ==========WSTAWIANMI DO SRODKA LISTY============= ");
            dokumenty.Documents.Insert(3, new Document("Nowo wstawiony dokument"));
            Console.WriteLine(dokumenty.GetInfo());
            Console.WriteLine("\n======================== WSTAWIANIE ZAKRESU Dokumentow===================\n");
            dokumenty.Documents.AddRange(new Document[]{new Document("nowy do kolekcji"),
                new Document(), new Document{Name = "Jeszcze inny sosob na dodanie dokumentu"} });
            Console.WriteLine(dokumenty.GetInfo());
            Console.WriteLine("\n======================== Usuwanie dokumentu===================\n");
            int doUsuniecia = GetDocument(dokumenty.Documents);
            dokumenty.RemoveDocument(dokumenty.Documents[doUsuniecia]);
            Console.WriteLine(dokumenty.GetInfo());
        }
        public static int GetDocument(List<Document> lista) {
            Console.Write($"Poda numer dokumetu do wyswietlenia: (0,{lista.Count - 1}): ");
            int index = Convert.ToInt32(Console.ReadLine());
            return index;
        }

        public static void Ex2() {
            //todo stworzy liste owoców - lista stringów
            //przecwiczyc dodawanie wstawianie i usuwanie owocow
            var owoce = new List<string>();
            owoce.AddRange(new string[]{"jabłko","gruszka","sliwka"});
            ShowAll(owoce);
            owoce.Insert(0,"arbuz");
            ShowAll(owoce);
        }

        public static void ShowAll(List<string> lista) {
            foreach (string owoc in lista)
            {
                Console.Write(owoc + ", ");
            }
            Console.WriteLine();
        }
    }
 
}
