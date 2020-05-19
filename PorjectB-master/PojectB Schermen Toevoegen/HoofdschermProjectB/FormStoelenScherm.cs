﻿using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace ProjectB
{
    public partial class FormStoelenScherm : Form
    {
        List<Button> chairs = new List<Button>(), reservedChairs = new List<Button>(Form1.aantalTickets-1);



        const int ButtonWidth = 45, ButtonHeight = 45;
        int counter = 1, chairCounter = 1, listCounter=0;
        Button RedChair, reserved;
        
        
        public FormStoelenScherm()

                      {
           
            InitializeComponent();
            stoelNummer.Text = "Kiez stoel nummer " + chairCounter;
            for (int countVertical = 1, buttonY=100; countVertical < 11; countVertical++,buttonY+=50)
            {
                for ( int countHorizontal = 1, buttonX = 502; countHorizontal < 11; buttonX += 50,counter++, countHorizontal++)
                {
                    Button chair = new Button();
                    chair.Location = new Point(buttonX, buttonY);
                    chair.Size = new Size(ButtonWidth, ButtonHeight);
                    chair.Name = "chair " + counter;
                    chair.Text = "" + counter;
                    chair.TabStop = false;
                    chair.FlatStyle = FlatStyle.Flat;
                    chair.FlatAppearance.BorderSize = 0;
                    chair.BackColor = Color.PeachPuff;
                    chair.Anchor = (AnchorStyles.None);
                    panel1.Controls.Add(chair);
                    chairs.Add(chair);
                    chair.Click += new EventHandler(this.SelectChair);
                    

                }

                reserved = Helper;
            }
             
             

        }

        private void SelectChair(object sender, EventArgs e)
        {         

            reserved.BackColor = Color.PeachPuff;
            Button Chair = (Button)sender;
            //reservedChairs[listCounter] = Chair;
            Chair.BackColor = Color.Blue;
            reserved = Chair;
            RedChair = reserved;
        }

        private void button1_Click(object sender, EventArgs e)
        {
           
            if (chairCounter < Form1.aantalTickets)
            {
                RedChair.BackColor = Color.Red;
                reserved = Helper;
                chairCounter += 1;
                stoelNummer.Text = "Kies stoel nummer " + chairCounter;
            }
            else
            {   
                foreach(Button Chair in chairs)
                {
                    Chair.Enabled = false;
                }
                RedChair.BackColor = Color.Red;
                stoelNummer.Visible = false;
                Volgende.Visible = false;
                ReserveerKnop.Visible = true;
            }
        }

        private void ReserveerKnop_Click(object sender, EventArgs e)
        {
            this.Hide();
            betalen BetalenScherm = new betalen();
            BetalenScherm.Show();

        }

        private void labelMovis_MouseMove(object sender, MouseEventArgs e)
        {
            labelMovis.ForeColor = Color.White;
        }

        private void labelMovis_MouseLeave(object sender, EventArgs e)
        {
            labelMovis.ForeColor = Color.Black;
        }

        private void labelContact_MouseMove(object sender, MouseEventArgs e)
        {
            labelContact.ForeColor = Color.White;
        }

        private void labelContact_MouseLeave(object sender, EventArgs e)
        {
            labelContact.ForeColor = Color.Black;
        }

        private void labelMyaccount_MouseMove(object sender, MouseEventArgs e)
        {
            labelMyaccount.ForeColor = Color.White;
        }

        private void labelMyaccount_MouseLeave(object sender, EventArgs e)
        {
            labelMyaccount.ForeColor = Color.Black;
        }

        private void labelMovis_Click(object sender, EventArgs e)
        {
            Form1 hoofdScherm = new Form1();
            this.Hide();
            hoofdScherm.Show();
        }

        private void pictureBox2_Click(object sender, EventArgs e)
        {
            Form1 hoofdScherm = new Form1();
            this.Hide();
            hoofdScherm.Show();
        }

        private void labelContact_Click(object sender, EventArgs e)
        {
            contactForm contactScherm = new contactForm();
            this.Hide();
            contactScherm.Show();
        }

        private void pictureBox3_Click(object sender, EventArgs e)
        {
            contactForm contactScherm = new contactForm();
            this.Hide();
            contactScherm.Show();
        }

        private void labelMyaccount_Click(object sender, EventArgs e)
        {
            FormProfiel profielScherm = new FormProfiel();
            this.Hide();
            profielScherm.Show();
        }

        private void FormStoelenScherm_FormClosed(object sender, FormClosedEventArgs e)
        {
            Application.Exit();
        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {
            FormProfiel profielScherm = new FormProfiel();
            this.Hide();
            profielScherm.Show();
        }




    }
    }

