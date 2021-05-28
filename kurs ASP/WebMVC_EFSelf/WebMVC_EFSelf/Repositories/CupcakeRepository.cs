using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using WebMVC_EFSelf.Data;
using WebMVC_EFSelf.Models;

namespace WebMVC_EFSelf.Repositories
{
    public class CupcakeRepository : ICupcakeRepository {
        private CupcakeContext _context;

        public CupcakeRepository(CupcakeContext context) {
            _context = context;
        }
        public void CreateCupcake(Cupcake cupcake)
        {
            throw new NotImplementedException();
        }

        public void DeleteCupcake(int id)
        {
            throw new NotImplementedException();
        }

        public Cupcake GetCupcakeById(int id) {
            return _context.Cupcakes.Include(b => b.Bakery)
                .SingleOrDefault(c => c.CupcakeId == id);
        }

        public IEnumerable<Cupcake> GetCupcakes() {
            return _context.Cupcakes.ToList();
        }

        public IQueryable<Bakery> PopulateBakeriesDropDownList()
        {
            throw new NotImplementedException();
        }

        public void SaveChanges()
        {
            throw new NotImplementedException();
        }
    }
}
