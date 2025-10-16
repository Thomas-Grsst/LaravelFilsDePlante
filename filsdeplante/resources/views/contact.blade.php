@extends('layout')
@section('content')

<!-- Bannière principale -->
    <section class="hero">
        <div class="hero-content">
            <h2>Contactez-nous</h2>
            <p>Une question, un conseil ou juste envie de partager votre passion du jardinage ? Nous sommes à votre écoute.</p>
        </div>
    </section>

    <!-- Contenu principal -->
    <main class="container">
        <div class="contact-grid">
            <!-- Informations de contact -->
            <div class="contact-info">
                <h2 class="section-title">Restons en contact</h2>
                <p>N'hésitez pas à nous contacter pour toute question concernant les plantes, votre potager ou nos guides. Notre équipe de passionnés se fera un plaisir de vous répondre.</p>
                
                <div class="info-card">
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-content">
                            <h3>Notre adresse</h3>
                            <p>Basilique Notre-Dame de Fourvière, 8 Pl. de Fourvière,<br>69005 Lyon, France</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info-content">
                            <h3>Téléphone</h3>
                            <p>+33 1 23 45 67 89</p>
                            <small>Lun-Ven: 9h-18h</small>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h3>Email</h3>
                            <p>contact@filsdeplante.fr</p>
                            <small>Réponse sous 24h</small>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-share-alt"></i>
                        </div>
                        <div class="info-content">
                            <h3>Réseaux sociaux</h3>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Formulaire de contact -->
            <div class="contact-form-container">
                <h2 class="section-title">Envoyez-nous un message</h2>
                <form class="contact-form" id="contactForm">
                    <div class="form-group">
                        <label for="name">Nom complet *</label>
                        <input type="text" id="name" name="name" required>
                        <span class="error-message" id="nameError"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Adresse email *</label>
                        <input type="email" id="email" name="email" required>
                        <span class="error-message" id="emailError"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Sujet *</label>
                        <select id="subject" name="subject" required>
                            <option value="">Choisissez un sujet</option>
                            <option value="question">Question sur les plantes</option>
                            <option value="ajout">Ajouter une plante</option>
                            <option value="potager">Conseil potager</option>
                            <option value="technical">Problème technique</option>
                            <option value="partnership">Partenariat</option>
                            <option value="other">Autre</option>
                        </select>
                        <span class="error-message" id="subjectError"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                        <span class="error-message" id="messageError"></span>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane"></i> Envoyer le message
                    </button>
                </form>
                
                <div id="formSuccess" class="success-message hidden">
                    <i class="fas fa-check-circle"></i>
                    <h3>Message envoyé avec succès !</h3>
                    <p>Merci de nous avoir contactés. Nous vous répondrons dans les plus brefs délais.</p>
                </div>
            </div>
        </div>
        
        <!-- Carte -->
        <div class="map-section">
            <h2 class="section-title">Nous trouver</h2>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.781379071577!2d4.822357176887648!3d45.76218897108015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDXCsDQ1JzQzLjkiTiA0wrA0OScyMi4xIkU!5e0!3m2!1sfr!2sfr!4v1712345678901!5m2!1sfr!2sfr"
                        width="100%" 
                        height="400" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"
                        title="Carte localisation Fils de Plante">
                </iframe>
            </div>
        </div>
        
        <!-- FAQ -->
        <div class="faq-section">
            <h2 class="section-title">Questions fréquentes</h2>
            <div class="faq-grid">
                <div class="faq-item">
                    <h3><i class="fas fa-seedling"></i> Comment créer mon premier potager ?</h3>
                    <p>Nous recommandons de commencer par une petite surface, de bien préparer le sol et de choisir des plantes adaptées à votre région et à la saison.</p>
                </div>
                
                <div class="faq-item">
                    <h3><i class="fas fa-leaf"></i> Quelle est la meilleure période pour planter ?</h3>
                    <p>Cela dépend des plantes. En général, le printemps est idéal pour la plupart des végétaux, mais certains se plantent à l'automne.</p>
                </div>
                
                <div class="faq-item">
                    <h3><i class="fas fa-book"></i> Où trouver vos guides complets ?</h3>
                    <p>Tous nos guides sont disponibles dans la section "Guides" de notre site. Ils sont classés par thématique et par niveau de difficulté.</p>
                </div>
                
                <div class="faq-item">
                    <h3><i class="fas fa-truck"></i> Livrez-vous des plantes ?</h3>
                    <p>Nous ne vendons pas directement de plantes, mais nous pouvons vous orienter vers nos pépiniéristes partenaires selon votre région.</p>
                </div>
            </div>
        </div>
    </main>

@endsection