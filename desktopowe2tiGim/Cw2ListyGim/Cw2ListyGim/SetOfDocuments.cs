using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Cw2ListyGim
{
    class SetOfDocuments
    {
        public List<Document> Documents { get; set; }

        private void fillDocuments() {
            if(Documents==null) Documents = new List<Document>();
            Documents.Add(new Document(){Name = "dokument 1"});
            Documents.Add(new Document() { Name = "dokument 2" });
            Documents.Add(new Document() { Name = "nowy dokument 1" });
            Documents.Add(new Document() { Name = "nowy dokument 2" });
            Documents.Add(new Document() { Name = "maly dokument" });
            Documents.Add(new Document() { Name = "dokument 5" });
            Documents.Add(new Document("Dla Zosi"));
        }

        public SetOfDocuments() {
            fillDocuments();
        }

        public void AddNewDocument(Document d) {
            Documents.Add(d);
           
        }

        public void RemoveDocument(Document doc) {
            Documents.Remove(doc);
        }

        public string GetInfo() {
            StringBuilder sb = new StringBuilder();
            sb.Append($"Ilosc dokumentow: {Documents.Count}").Append(Environment.NewLine);
            foreach (var d in Documents) {
                sb.Append(d + Environment.NewLine);
            }

            return sb.ToString();
        }
    }
}
