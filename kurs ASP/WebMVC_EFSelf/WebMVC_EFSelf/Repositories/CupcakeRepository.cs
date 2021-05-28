using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using Microsoft.EntityFrameworkCore;
using WebMVC_EFSelf.Data;
using WebMVC_EFSelf.Models;

namespace WebMVC_EFSelf.Repositories {
    public class CupcakeRepository : ICupcakeRepository {
        private readonly CupcakeContext _context;

        public CupcakeRepository(CupcakeContext context) {
            _context = context;
        }

        public void CreateCupcake(Cupcake cupcake) {
            if (cupcake.PhotoAvatar != null && cupcake.PhotoAvatar.Length > 0) {
                cupcake.ImageMimeType = cupcake.PhotoAvatar.ContentType;
                cupcake.ImageName = Path.GetFileName(cupcake.PhotoAvatar.FileName);
                using (var memoryStream = new MemoryStream()) {
                    cupcake.PhotoAvatar.CopyTo(memoryStream);
                    cupcake.PhotFile = memoryStream.ToArray();
                }

                _context.Add(cupcake);
                _context.SaveChanges();
            }
        }

        public void DeleteCupcake(int id) {
            throw new NotImplementedException();
        }

        public Cupcake GetCupcakeById(int id) {
            return _context.Cupcakes.Include(b => b.Bakery)
                .SingleOrDefault(c => c.CupcakeId == id);
        }

        public IEnumerable<Cupcake> GetCupcakes() {
            return _context.Cupcakes.ToList();
        }

        public IQueryable<Bakery> PopulateBakeriesDropDownList() {
            var bakieriesQuery = from b in _context.Bakeries
                orderby b.BakeryName
                select b;
            // var dd = _context.Bakeries.OrderBy(b => b.BakeryName);
            return bakieriesQuery;
        }

        public void SaveChanges() {
            throw new NotImplementedException();
        }
    }
}