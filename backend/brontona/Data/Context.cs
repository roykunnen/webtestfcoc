using FCOC;
using FCOC.Classes;
using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace brontona.Data
{
    public class Context : DbContext
    {
        public Context(DbContextOptions options) : base(options) { }
        protected override void OnModelCreating(ModelBuilder builder)
        {
            base.OnModelCreating(builder);
        }

        public DbSet<accounts> fcocaccounts { get; set; }
        public DbSet<customers> customers { get; set; }
        public DbSet<orders> orders { get; set; }
        public DbSet<products> products { get; set; }
        public DbSet<reviews> reviews { get; set; }
        public DbSet<suppliers> suppliers { get; set; }
    }
}
