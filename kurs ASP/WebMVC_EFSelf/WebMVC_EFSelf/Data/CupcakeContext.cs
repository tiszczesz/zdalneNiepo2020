using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using WebMVC_EFSelf.Models;

namespace WebMVC_EFSelf.Data
{
    public class CupcakeContext : DbContext
    {
        public CupcakeContext(DbContextOptions<CupcakeContext> options):base(options) {
        }

        public DbSet<Cupcake> Cupcakes { get; set; }
        public DbSet<Bakery> Bakeries { get; set; }

        protected override void OnModelCreating(ModelBuilder modelBuilder) {
            base.OnModelCreating(modelBuilder);

            modelBuilder.Entity<Bakery>().HasData(
                new Bakery {
                    BakeryId = 1,
                    BakeryName = "Ekstra bezglutenowe wypieki",
                    Address = "Nowa Wola 32-008 ul. Błotna",
                    Quantity = 8
                },
                new Bakery
                {
                    BakeryId = 2,
                    BakeryName = "Ekstra bezglutenowe wypieki",
                    Address = "Kłaj 32-111 ul. Topolowa 4",
                    Quantity = 3
                },
                new Bakery
                {
                    BakeryId = 3,
                    BakeryName = "Malanowski i zoo",
                    Address = "Kraków 31-288 ul. Grodzka 4",
                    Quantity = 2
                },
                new Bakery
                {
                    BakeryId = 4,
                    BakeryName = "Ekstra bezglutenowe wypieki",
                    Address = "Tarnów 35-008 ul. Górna 4",
                    Quantity = 4
                }

                );
            modelBuilder.Entity<Cupcake>().HasData(

                );
        }
    }
}
