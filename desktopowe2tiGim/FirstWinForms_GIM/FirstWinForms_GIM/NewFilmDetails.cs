using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using FirstWinForms_GIM.Models.Ex3Models;

namespace FirstWinForms_GIM {
    public partial class NewFilmDetails : Form {
        private Ex3Form parent;

        public NewFilmDetails(Ex3Form parentForm) {
            InitializeComponent();
            this.parent = parentForm;
        }

        private void canellButton_Click(object sender, EventArgs e) {
            Close();
        }

        private void addButton_Click(object sender, EventArgs e) {
            switch (parent.Action) {
                case ActionAdd.addNewFilm:
                    AddNewFilm();
                    break;
                case ActionAdd.insertNewFilm:
                    InsertFilm();
                    break;
                case ActionAdd.updateFilm:
                    //todo
                    UpdateFilm();
                    
                    break;
            }
        }

        private void AddNewFilm() {
            if (String.IsNullOrWhiteSpace(titleTexBox.Text) ||
                String.IsNullOrWhiteSpace(authorTextBox.Text) ||
                String.IsNullOrWhiteSpace(priceTextBox.Text)) {
                Close();
            }

            try {
                Film newFilm = new Film() {
                    Title = titleTexBox.Text.Trim(),
                    Author = authorTextBox.Text.Trim(),
                    Price = Convert.ToDecimal(priceTextBox.Text)
                };
                parent.AddNewFilm(newFilm);
            }
            catch (Exception exception) {
                MessageBox.Show("Error chyba cena: " + exception.Message);
            }
            finally {
                Close();
            }
        }

        private void InsertFilm() {
            if (String.IsNullOrWhiteSpace(titleTexBox.Text) ||
                String.IsNullOrWhiteSpace(authorTextBox.Text) ||
                String.IsNullOrWhiteSpace(priceTextBox.Text))
            {
                Close();
            }

            try
            {
                Film newFilm = new Film()
                {
                    Title = titleTexBox.Text.Trim(),
                    Author = authorTextBox.Text.Trim(),
                    Price = Convert.ToDecimal(priceTextBox.Text)
                };
                parent.InsertNewFilm(newFilm);
            }
            catch (Exception exception)
            {
                MessageBox.Show("Error chyba cena: " + exception.Message);
            }
            finally
            {
                Close();
            }
        }

        private void UpdateFilm() {
            if (String.IsNullOrWhiteSpace(titleTexBox.Text) ||
                String.IsNullOrWhiteSpace(authorTextBox.Text) ||
                String.IsNullOrWhiteSpace(priceTextBox.Text))
            {
                Close();
            }

            try
            {
                Film newFilm = new Film()
                {
                    Title = titleTexBox.Text.Trim(),
                    Author = authorTextBox.Text.Trim(),
                    Price = Convert.ToDecimal(priceTextBox.Text)
                };
                parent.UpdateFilm(newFilm);
            }
            catch (Exception exception)
            {
                MessageBox.Show("Error chyba cena: " + exception.Message);
            }
            finally
            {
                Close();
            }
        }

        private void NewFilmDetails_Load(object sender, EventArgs e)
        {
            if (parent.Action == ActionAdd.updateFilm) {
                ListView filmyListView = parent.GetListView();
                int index = filmyListView.SelectedIndices[0];
                var dd = filmyListView.Items[index].SubItems;
                titleTexBox.Text = filmyListView.Items[index].SubItems[1].Text;
                authorTextBox.Text = filmyListView.Items[index].SubItems[2].Text;
                priceTextBox.Text = filmyListView.Items[index].SubItems[3].Text;
            }
        }
    }
}