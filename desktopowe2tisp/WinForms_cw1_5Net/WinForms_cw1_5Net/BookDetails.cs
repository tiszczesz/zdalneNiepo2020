using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WinForms_cw1_5Net
{
    public partial class BookDetails : Form {
        private Ex3Form parEx3Form;
        private Book book;
        public BookDetails(Ex3Form parentEx3Form,Book book=null) {
            this.book = book;
            InitializeComponent();
            this.parEx3Form = parentEx3Form;
        }

        private void cancelButton_Click(object sender, EventArgs e)
        {
            Close();
        }

        private void OkButton_Click(object sender, EventArgs e)
        {
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
            if (String.IsNullOrWhiteSpace(titleTextBox.Text) ||
                String.IsNullOrWhiteSpace(authorTextBox.Text) ||
                String.IsNullOrWhiteSpace(priceTextBox.Text))
            {
                Close();
                return;
            }

            try
            {
                Book newBook = new Book()
                {
                    Title = titleTextBox.Text,
                    Author = authorTextBox.Text,
                    Price = Convert.ToDecimal(priceTextBox.Text)
                };
              //  parEx3Form.UpdateBook(newBook);
            }
            catch (Exception ex)
            {
                MessageBox.Show("error z ceną: " + ex.Message);
            }
            finally
            {
                Close();
            }
        }
        private void InsertNewBook() {
            if (String.IsNullOrWhiteSpace(titleTextBox.Text) ||
                String.IsNullOrWhiteSpace(authorTextBox.Text) ||
                String.IsNullOrWhiteSpace(priceTextBox.Text))
            {
                Close();
                return;
            }

            try
            {
                Book newBook = new Book()
                {
                    Title = titleTextBox.Text,
                    Author = authorTextBox.Text,
                    Price = Convert.ToDecimal(priceTextBox.Text)
                };
                parEx3Form.InsedrtBook(newBook);
            }
            catch (Exception ex)
            {
                MessageBox.Show("error z ceną: " + ex.Message);
            }
            finally
            {
                Close();
            }
        }
        private void AddNewBook() {
            if (String.IsNullOrWhiteSpace(titleTextBox.Text) ||
                String.IsNullOrWhiteSpace(authorTextBox.Text) ||
                String.IsNullOrWhiteSpace(priceTextBox.Text)) {
                Close();
                return;
            }

            try {
                Book newBook = new Book() {
                    Title = titleTextBox.Text,
                    Author = authorTextBox.Text,
                    Price = Convert.ToDecimal(priceTextBox.Text)
                };
                parEx3Form.AddNewBook(newBook);
            }
            catch (Exception ex) {
                MessageBox.Show("error z ceną: " + ex.Message);
            }
            finally
            {
                Close();
            }
        }

        private void BookDetails_Load(object sender, EventArgs e)
        {
            
        }
    }
}
