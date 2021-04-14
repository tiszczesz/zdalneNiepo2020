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
                    UpdateFilm();
                    break;
               
            }
           
        }

        private void AddNewFilm() {
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
                parent.AddNewFilm(newFilm);
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

        private void InsertFilm() {
            //todo
        }

        private void UpdateFilm() {
            //todo
        }

    }
}