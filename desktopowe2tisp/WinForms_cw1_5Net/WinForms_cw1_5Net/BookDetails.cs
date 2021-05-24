using System;
using System.Windows.Forms;

namespace WinForms_cw1_5Net {
    public partial class BookDetails : Form {
        private readonly Book book;
        private readonly Ex3Form parEx3Form;

        public BookDetails(Ex3Form parentEx3Form, Book book = null) {
            this.book = book;
            InitializeComponent();
            parEx3Form = parentEx3Form;
        }

        private void cancelButton_Click(object sender, EventArgs e) {
            Close();
        }

        private void OkButton_Click(object sender, EventArgs e) {
            switch (parEx3Form.Action) {
                case BookAction.ActionAdd:
                    AddNewBook();
                    break;
                case BookAction.ActionInsert:
                    InsertNewBook();
                    break;

                case BookAction.ActionUpdate:

                    UpdateBook();
                    break;
            }
        }

        private void UpdateBook() {
            if (string.IsNullOrWhiteSpace(titleTextBox.Text) ||
                string.IsNullOrWhiteSpace(authorTextBox.Text) ||
                string.IsNullOrWhiteSpace(priceTextBox.Text)) {
                Close();
                return;
            }

            try {
                var newBook = new Book {
                    Title = titleTextBox.Text,
                    Author = authorTextBox.Text,
                    Price = Convert.ToDecimal(priceTextBox.Text)
                };
                parEx3Form.UpdateBook(newBook);
            }
            catch (Exception ex) {
                MessageBox.Show("error z ceną: " + ex.Message);
            }
            finally {
                Close();
            }
        }

        private void InsertNewBook() {
            if (string.IsNullOrWhiteSpace(titleTextBox.Text) ||
                string.IsNullOrWhiteSpace(authorTextBox.Text) ||
                string.IsNullOrWhiteSpace(priceTextBox.Text)) {
                Close();
                return;
            }

            try {
                var newBook = new Book {
                    Title = titleTextBox.Text,
                    Author = authorTextBox.Text,
                    Price = Convert.ToDecimal(priceTextBox.Text)
                };
                parEx3Form.InsedrtBook(newBook);
            }
            catch (Exception ex) {
                MessageBox.Show("error z ceną: " + ex.Message);
            }
            finally {
                Close();
            }
        }

        private void AddNewBook() {
            if (string.IsNullOrWhiteSpace(titleTextBox.Text) ||
                string.IsNullOrWhiteSpace(authorTextBox.Text) ||
                string.IsNullOrWhiteSpace(priceTextBox.Text)) {
                Close();
                return;
            }

            try {
                var newBook = new Book {
                    Title = titleTextBox.Text,
                    Author = authorTextBox.Text,
                    Price = Convert.ToDecimal(priceTextBox.Text)
                };
                parEx3Form.AddNewBook(newBook);
            }
            catch (Exception ex) {
                MessageBox.Show("error z ceną: " + ex.Message);
            }
            finally {
                Close();
            }
        }

        private void BookDetails_Load(object sender, EventArgs e) {
            titleTextBox.Text = book?.Title;
            authorTextBox.Text = book?.Author;
            priceTextBox.Text = book?.Price.ToString();
        }
    }
}