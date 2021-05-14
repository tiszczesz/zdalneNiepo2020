using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using WebMVC_2_EF.Models;

namespace WebMVC_2_EF.Data
{
    public class EFContext : DbContext
    {
        public EFContext (DbContextOptions<EFContext> options)
            : base(options)
        {
        }

        public DbSet<WebMVC_2_EF.Models.Contact> Contact { get; set; }
    }
}
