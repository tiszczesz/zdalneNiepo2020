using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using Microsoft.VisualBasic;

namespace WinForms_cw1_5Net {
    public partial class Ex3Form : Form {
        private MainWindow window;
        private BindingList<string> contactsList;
        private List<Book> books;
        public BookAction Action { get; set; }

        public Ex3Form(MainWindow window) {
            this.window = window;
            InitializeComponent();
            Contacts contacts = new Contacts();
            contactsList = contacts.MyContacts;
            listBoxContacts.DataSource = contactsList;
            BookRepo bookRepo = new BookRepo();
            books = bookRepo.Books;
        }

        private void Ex3Form_Load(object sender, EventArgs e) {
            if (window != null) {
                window.GeTextBox().Text += "Załadowano okienko: " + Text + " w czasie: "
                                           + DateTime.Now.ToLongTimeString() + Environment.NewLine;
            }

            fillListViewBooks();
        }

        private void fillListViewBooks() {
            BooksListView.Items.Clear();
            int lp = 0;

            foreach (var b in books) {
                lp++;
                ListViewItem item = new ListViewItem(lp.ToString());
                item.SubItems.Add(b.Title);
                item.SubItems.Add(b.Author);
                item.SubItems.Add(b.Price.ToString());
                BooksListView.Items.Add(item);
            }
        }

        private void Ex3Form_FormClosed(object sender, FormClosedEventArgs e) {
            if (window != null) {
                window.GeTextBox().Text += "Zamknięto okienko: " + Text + "w czasie: "
                                           + DateTime.Now.ToLongTimeString() + Environment.NewLine;
            }
        }

        private void btnClear_Click(object sender, EventArgs e) {
            contactsList.Clear();
        }

        private void btnAddNew_Click(object sender, EventArgs e) {
            string contact = txtBoxItem.Text.Trim();
            if (String.IsNullOrEmpty(contact)) {
                MessageBox.Show("Musisz podać nowy kontakt!!!", "UWAGA!!!!");
                return;
            }

            contactsList.Add(contact);
            txtBoxItem.Text = "";
        }

        private void btnInsert_Click(object sender, EventArgs e) {
            //MessageBox.Show(listBoxContacts.SelectedIndex.ToString());
            if (listBoxContacts.SelectedIndex == -1) {
                return;
            }

            string contact = txtBoxItem.Text.Trim();
            if (String.IsNullOrEmpty(contact)) {
                MessageBox.Show("Musisz podać nowy kontakt!!!", "UWAGA!!!!");
                return;
            }

            contactsList.Insert(listBoxContacts.SelectedIndex, contact);
            txtBoxItem.Text = "";
        }

        private void btnDeleteContact_Click(object sender, EventArgs e) {
            if (listBoxContacts.SelectedIndex == -1) {
                return;
            }

            contactsList.Remove((string) listBoxContacts.SelectedItem);
        }

        private void btnEdit_Click(object sender, EventArgs e) {
            //pojawia sie okienki z mozliwoscia zmiany elementu wybranego
            if (listBoxContacts.SelectedIndex == -1) {
                return;
            }

            int index = listBoxContacts.SelectedIndex;
            string result = Interaction
                .InputBox("Zmiana zawartości:", "Update", contactsList[index]);
            if (String.IsNullOrWhiteSpace(result)) return;
            contactsList[index] = result;
        }

        private void listBoxContacts_MouseDoubleClick(object sender, MouseEventArgs e) {
            if (listBoxContacts.SelectedIndex == -1) return;
            btnEdit_Click(sender, e);
        }

        private void insertBookButton_Click(object sender, EventArgs e) {
          //  if(BooksListView.SelectedItems[0]!=-1)
          if (BooksListView.SelectedItems.Count > 0 && BooksListView.SelectedItems[0].Index!=-1) {
              int index = BooksListView.SelectedItems[0].Index;
               Action = BookAction.ActionInsert;
               new BookDetails(this).ShowDialog();
               
          }
          else {
              MessageBox.Show("Zaznacz miejsce na liście książek");
          }
          
          
        }

     

        private void clearAllButton_Click(object sender, EventArgs e)
        {
            if (books != null)
            {
                books.Clear();
                fillListViewBooks();
               // BooksListView.Items.Clear();
            }

        }

        private void addNewButton_Click(object sender, EventArgs e) {
            Action = BookAction.ActionAdd;
            new BookDetails(this).ShowDialog();

        }

        public void AddNewBook(Book b) {
            books.Add(b);
            fillListViewBooks();
        }

        public void InsedrtBook(Book b) {
             books.Insert(BooksListView.SelectedItems[0].Index,b);
            fillListViewBooks();

        }

        public void DeleteBook(Book b) {
            books.Remove(b);
            fillListViewBooks();
        }

        private void deleteBookButton_Click(object sender, EventArgs e)
        {
            if (BooksListView.SelectedItems.Count > 0 && BooksListView.SelectedItems[0].Index != -1) {
                Book b = getBookById();
                if(b!=null) DeleteBook(b);
            }
            else
            {
                MessageBox.Show("Zaznacz miejsce na liście książek");
            }
        }

        public void UpdateBook(Book book) {
            Book toEdit = getBookById();
            toEdit.Title = book.Title;
            toEdit.Author = book.Author;
            toEdit.Price = book.Price;
            fillListViewBooks();
        }
        private Book getBookById() {
            var result = BooksListView.SelectedItems[0].SubItems;
            Book b = books.FirstOrDefault(b => (b.Title == result[1].Text
                    /*&& b.Price==Convert.ToDecimal(result[3]*/
                ));
            return b;
        }
        private void editBookButton_Click(object sender, EventArgs e)
        {
            if (BooksListView.SelectedItems.Count > 0 && BooksListView.SelectedItems[0].Index != -1)
            {
                int index = BooksListView.SelectedItems[0].Index;
                Action = BookAction.ActionUpdate;
                Book book = getBookById();
                new BookDetails(this, book).ShowDialog();

            }
            else
            {
                MessageBox.Show("Zaznacz miejsce na liście książek");
            }


        }

        private void BooksListView_DoubleClick(object sender, EventArgs e)
        {
            editBookButton_Click(sender,e);
        }
    }
}
