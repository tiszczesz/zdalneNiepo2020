
namespace WinForms_cw1_5Net
{
    partial class Form1
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.label1 = new System.Windows.Forms.Label();
            this.txtBoxImie = new System.Windows.Forms.TextBox();
            this.txtBoxNazwisko = new System.Windows.Forms.TextBox();
            this.label2 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.lbWynik = new System.Windows.Forms.Label();
            this.btnWynik = new System.Windows.Forms.Button();
            this.btnExit = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Segoe UI", 22.2F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.label1.ForeColor = System.Drawing.SystemColors.HotTrack;
            this.label1.Location = new System.Drawing.Point(12, 9);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(331, 50);
            this.label1.TabIndex = 0;
            this.label1.Text = "Okienko pierwsze";
            // 
            // txtBoxImie
            // 
            this.txtBoxImie.Location = new System.Drawing.Point(124, 80);
            this.txtBoxImie.Name = "txtBoxImie";
            this.txtBoxImie.Size = new System.Drawing.Size(219, 27);
            this.txtBoxImie.TabIndex = 1;
            // 
            // txtBoxNazwisko
            // 
            this.txtBoxNazwisko.Location = new System.Drawing.Point(124, 130);
            this.txtBoxNazwisko.Name = "txtBoxNazwisko";
            this.txtBoxNazwisko.Size = new System.Drawing.Size(219, 27);
            this.txtBoxNazwisko.TabIndex = 2;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(80, 83);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(41, 20);
            this.label2.TabIndex = 3;
            this.label2.Text = "Imię:";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Location = new System.Drawing.Point(46, 133);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(75, 20);
            this.label3.TabIndex = 4;
            this.label3.Text = "Nazwisko:";
            // 
            // lbWynik
            // 
            this.lbWynik.AutoSize = true;
            this.lbWynik.BackColor = System.Drawing.SystemColors.Info;
            this.lbWynik.Location = new System.Drawing.Point(486, 75);
            this.lbWynik.Name = "lbWynik";
            this.lbWynik.Size = new System.Drawing.Size(0, 20);
            this.lbWynik.TabIndex = 5;
            // 
            // btnWynik
            // 
            this.btnWynik.Location = new System.Drawing.Point(124, 198);
            this.btnWynik.Name = "btnWynik";
            this.btnWynik.Size = new System.Drawing.Size(219, 71);
            this.btnWynik.TabIndex = 6;
            this.btnWynik.Text = "Zatwierdź Dane";
            this.btnWynik.UseVisualStyleBackColor = true;
            this.btnWynik.Click += new System.EventHandler(this.BtnWynik_Click);
            // 
            // btnExit
            // 
            this.btnExit.Location = new System.Drawing.Point(476, 198);
            this.btnExit.Name = "btnExit";
            this.btnExit.Size = new System.Drawing.Size(219, 71);
            this.btnExit.TabIndex = 7;
            this.btnExit.Text = "Wyjście";
            this.btnExit.UseVisualStyleBackColor = true;
            this.btnExit.Click += new System.EventHandler(this.btnExit_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 20F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(825, 308);
            this.Controls.Add(this.btnExit);
            this.Controls.Add(this.btnWynik);
            this.Controls.Add(this.lbWynik);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.txtBoxNazwisko);
            this.Controls.Add(this.txtBoxImie);
            this.Controls.Add(this.label1);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle;
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            this.Name = "Form1";
            this.Text = "Ćwiczenie 2";
            this.FormClosed += new System.Windows.Forms.FormClosedEventHandler(this.Form1_FormClosed);
            this.Load += new System.EventHandler(this.Form1_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox txtBoxImie;
        private System.Windows.Forms.TextBox txtBoxNazwisko;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label lbWynik;
        private System.Windows.Forms.Button btnWynik;
        private System.Windows.Forms.Button btnExit;
    }
}

