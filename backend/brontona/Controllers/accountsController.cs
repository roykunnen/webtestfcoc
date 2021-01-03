using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using FCOC.Classes;
using brontona.Data;

namespace brontona.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class accountsController : ControllerBase
    {
        private readonly Context _context;

        public accountsController(Context context)
        {
            _context = context;
        }

        // GET: api/accounts
        [HttpGet]
        public IEnumerable<accounts> Getfcocaccounts()
        {
            return _context.fcocaccounts;
        }

        // GET: api/accounts/5
        [HttpGet("{id}")]
        public async Task<IActionResult> Getaccounts([FromRoute] string id)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            var accounts = await _context.fcocaccounts.FindAsync(id);

            if (accounts == null)
            {
                return NotFound();
            }

            return Ok(accounts);
        }

        // PUT: api/accounts/5
        [HttpPut("{id}")]
        public async Task<IActionResult> Putaccounts([FromRoute] string id, [FromBody] accounts accounts)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            if (id != accounts.accountid)
            {
                return BadRequest();
            }

            _context.Entry(accounts).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!accountsExists(id))
                {
                    return NotFound();
                }
                else
                {
                    throw;
                }
            }

            return NoContent();
        }

        // POST: api/accounts
        [HttpPost]
        public async Task<IActionResult> Postaccounts([FromBody] accounts accounts)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            accounts a = accounts;
            // string mySalt = BCrypt.Net.BCrypt.GenerateSalt();
            // a.password = BCrypt.Net.BCrypt.HashPassword(accounts.password, mySalt);

            _context.fcocaccounts.Add(a);
            await _context.SaveChangesAsync();

            return CreatedAtAction("Getaccounts", new { id = accounts.accountid }, accounts);
        }

        // DELETE: api/accounts/5
        [HttpDelete("{id}")]
        public async Task<IActionResult> Deleteaccounts([FromRoute] string id)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            var accounts = await _context.fcocaccounts.FindAsync(id);
            if (accounts == null)
            {
                return NotFound();
            }

            _context.fcocaccounts.Remove(accounts);
            await _context.SaveChangesAsync();

            return Ok(accounts);
        }

        private bool accountsExists(string id)
        {
            return _context.fcocaccounts.Any(e => e.accountid == id);
        }
        [HttpPost("Verify/{accountid}")]
        public async Task<IActionResult> Verify(string accountid, [FromBody] string password)
        {
            await _context.SaveChangesAsync();

            //return Ok(BCrypt.Net.BCrypt.Verify(password, _context.fcocaccounts.FindAsync(accountid).Result.password));
            return Ok();
            /*
            var data = _context.fcocaccounts.FromSql($"select accountid from fcocaccounts where email = {email}");

            //string id = data.Select(b => b.accountid).ToString();

            reurn Ok(BCrypt.Net.BCrypt.Verify(password, _context.fcocaccounts.FindAsync(data.ToString()).Result.password));
            */

        }
    }
}